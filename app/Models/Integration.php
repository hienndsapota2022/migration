<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Integration extends Model
{
    protected $connection = 'mysql'; // mysql = mysql_v2

    const LAZADA = 11001;
    const SHOPIFY = 11002;
    const SHOPEE = 11003;
    const QOO10 = 11004;
    const QOO10_LEGACY = 11005;
    const WOOCOMMERCE = 11006;
    const AMAZON = 11007;
    const REDMART = 11008;
    const VEND = 11009;
    const XERO = 11010;
    const IHUB = 11011;
    const PRESTASHOP = 11012;

    /*
     * This is used mainly for validation so we don't have to query the DB
     */
    const INTEGRATIONS = [
        self::LAZADA => 'Lazada',
        self::SHOPIFY => 'Shopify',
        self::SHOPEE => 'Shopee',
        self::QOO10 => 'Qoo10',
        self::QOO10_LEGACY => 'Qoo10 Legacy',
        self::WOOCOMMERCE => 'Woocommerce',
        self::AMAZON => 'Amazon',
        self::REDMART => 'Redmart',
        self::VEND => 'Vend',
        self::XERO => 'Xero',
        self::IHUB => 'IHub',
        self::PRESTASHOP => 'PrestaShop',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'features', 'region_ids', 'sync_data', 'visibility', 'settings', 'jobs', 'type', 'position'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'region_ids' => 'array',
        'features' => 'array',
        'sync_data' => 'array',
        'settings' => 'array',
        'jobs' => 'array'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'settings', 'jobs', 'region_id', 'sync_data', 'deleted_at', 'features'
    ];

}
