<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models\PageQueryResourcePackageListResponseBody\data;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @description 当前资源包剩余总量
     *
     * @var int
     */
    public $currentAmount;

    /**
     * @description 资源包有效开始时间
     *
     * @var string
     */
    public $gmtValidBegin;

    /**
     * @description 资源包有效结束时间
     *
     * @var string
     */
    public $gmtValidEnd;

    /**
     * @description 当前资源包购买总量
     *
     * @var int
     */
    public $initAmount;

    /**
     * @description 资源包实例ID
     *
     * @var string
     */
    public $packageInstanceId;

    /**
     * @description 资源包类型
     *
     * @var string
     */
    public $packageType;
    protected $_name = [
        'currentAmount'     => 'CurrentAmount',
        'gmtValidBegin'     => 'GmtValidBegin',
        'gmtValidEnd'       => 'GmtValidEnd',
        'initAmount'        => 'InitAmount',
        'packageInstanceId' => 'PackageInstanceId',
        'packageType'       => 'PackageType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentAmount) {
            $res['CurrentAmount'] = $this->currentAmount;
        }
        if (null !== $this->gmtValidBegin) {
            $res['GmtValidBegin'] = $this->gmtValidBegin;
        }
        if (null !== $this->gmtValidEnd) {
            $res['GmtValidEnd'] = $this->gmtValidEnd;
        }
        if (null !== $this->initAmount) {
            $res['InitAmount'] = $this->initAmount;
        }
        if (null !== $this->packageInstanceId) {
            $res['PackageInstanceId'] = $this->packageInstanceId;
        }
        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentAmount'])) {
            $model->currentAmount = $map['CurrentAmount'];
        }
        if (isset($map['GmtValidBegin'])) {
            $model->gmtValidBegin = $map['GmtValidBegin'];
        }
        if (isset($map['GmtValidEnd'])) {
            $model->gmtValidEnd = $map['GmtValidEnd'];
        }
        if (isset($map['InitAmount'])) {
            $model->initAmount = $map['InitAmount'];
        }
        if (isset($map['PackageInstanceId'])) {
            $model->packageInstanceId = $map['PackageInstanceId'];
        }
        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }

        return $model;
    }
}
