<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class BuyPayAsYouGoOrderRequest extends Model
{
    /**
     * @example SensitiveDataProtection
     *
     * @var string
     */
    public $commodityType;

    /**
     * @example 7
     *
     * @var int
     */
    public $insNum;

    /**
     * @example 3***
     *
     * @var int
     */
    public $tid;

    /**
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
