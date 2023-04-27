<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class BuyPayAsYouGoOrderRequest extends Model
{
    /**
     * @description The number of database instances that you want to use DMS to manage.
     *
     * > : A quota can be used for only one database instance.
     * @example SensitiveDataProtection
     *
     * @var string
     */
    public $commodityType;

    /**
     * @description The control mode of DMS. Valid values:
     *
     *   **stand**: Stable Change
     *   **safety**: Security Collaboration
     *
     * @example 7
     *
     * @var int
     */
    public $insNum;

    /**
     * @description The type of the resource that you want to purchase.
     *
     *   **VersionType**: DMS that supports control modes
     *   **SensitiveDataProtection**: DMS that supports sensitive data protection
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;

    /**
     * @description The error code returned if the request failed.
     *
     * @example stand
     *
     * @var string
     */
    public $versionType;
    protected $_name = [
        'commodityType' => 'CommodityType',
        'insNum'        => 'InsNum',
        'tid'           => 'Tid',
        'versionType'   => 'VersionType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodityType) {
            $res['CommodityType'] = $this->commodityType;
        }
        if (null !== $this->insNum) {
            $res['InsNum'] = $this->insNum;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->versionType) {
            $res['VersionType'] = $this->versionType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BuyPayAsYouGoOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityType'])) {
            $model->commodityType = $map['CommodityType'];
        }
        if (isset($map['InsNum'])) {
            $model->insNum = $map['InsNum'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['VersionType'])) {
            $model->versionType = $map['VersionType'];
        }

        return $model;
    }
}
