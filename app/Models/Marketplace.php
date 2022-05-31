<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Marketplace extends Model
{
    use SoftDeletes;

    protected $connection = 'mysql_v1';

    const REGION_ALL        = 0;
    const REGION_SINGAPORE  = 1;
    const REGION_MALAYSIA   = 2;

    const REGION_GLOBAL_INTEGRATIONS    = [self::VEND, self::SHOPIFY, self::WORDPRESS, self::AMAZON];
    const REGION_SINGAPORE_INTEGRATIONS = [self::LAZADA_SG, self::QOO10, self::AMAZON, self::SHOPEE, self::SUPERMOM, self::REDMART];
    const REGION_MALAYSIA_INTEGRATIONS  = [self::LAZADA_MY, self::QOO10_MY, self::SHOPEE_MY];

    // after bind a number to a marketplace, must setup MARKETPLACE_ARRAY, MARKETPLACE_MAX_IMAGE and MARKETPLACE_COLOR too
    const LAZADA_SG = 1;
    const QOO10     = 2;
    const SHOPEE    = 3;
    const VEND      = 4;
    const SHOPIFY   = 5;
    const SUPERMOM  = 6;
    const WORDPRESS = 7;
    const IHUB      = 8;
    const LAZADA_MY = 9;
    const SHOPEE_MY = 10;
    const QOO10_MY  = 11;
    const AMAZON    = 12;
    const XERO      = 13;
    const REDMART   = 14;
    const INFOLOG   = 15;

    const MARKETPLACE_ARRAY = [
        self::LAZADA_SG => 'Lazada SG',
        self::QOO10     => 'Qoo10',
        self::SHOPEE    => 'Shopee',
        self::VEND      => 'Vend',
        self::SHOPIFY   => 'Shopify',
        self::SUPERMOM  => 'Supermom',
        self::WORDPRESS => 'Wordpress',
        self::IHUB      => 'iHub',
        self::LAZADA_MY => 'Lazada MY',
        self::SHOPEE_MY => 'Shopee MY',
        self::QOO10_MY  => 'Qoo10 MY',
        self::AMAZON    => 'Amazon',
        self::XERO      => 'Xero',
        self::REDMART   => 'Redmart',
        self::INFOLOG   => 'Infolog',
    ];

    const MARKETPLACE_MAX_IMAGE = [
        self::LAZADA_SG => 8,
        self::QOO10     => 13,
        self::SHOPEE    => 9,
        self::VEND      => 8,
        self::SHOPIFY   => 8,
        self::SUPERMOM  => 8,
        self::WORDPRESS => 8,
        self::IHUB      => 8,
        self::LAZADA_MY => 8,
        self::SHOPEE_MY => 9,
        self::QOO10_MY  => 13,
        self::AMAZON    => 8,
        self::XERO      => 8,
        self::REDMART   => 8,
        self::INFOLOG   => 8
    ];

    const MARKETPLACE_COLOR = [
        self::LAZADA_SG  => 'F8F8FF',
        self::LAZADA_MY  => 'F8F3FF',
        self::QOO10      => 'F8F4FF',
        self::QOO10_MY   => 'F8F5FF',
        self::SHOPEE     => 'F8F6FF',
        self::SHOPEE_MY  => 'F8F7FF',
        self::VEND       => 'F8F8AF',
        self::SHOPIFY    => 'F8F8BF',
        self::SUPERMOM   => 'F8F8CF',
        self::WORDPRESS  => 'F8F8DF',
        self::IHUB       => 'AD8972',
        self::AMAZON     => 'ADA781',
        self::XERO       => 'AD7279',
        self::REDMART    => '95575E',
        self::INFOLOG    => '7279AD',
    ];

    protected $dates = ['deleted_at'];

    protected $fillable = ['name', 'active', 'create_product', 'sync_order', 'sync_products', 'region'];

    protected $casts = [
        'active' => 'boolean',
        'label' => 'array',
    ];

    /**
     * The attributes that are hidden from the array
     *
     * @var array
     */
    protected $hidden = [
        'deleted_at', 'created_at', 'updated_at', 'active'
    ];
    
}