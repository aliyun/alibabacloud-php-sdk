<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class CreateResourcePackageRequest extends Model
{
    /**
     * @example 6
     *
     * @var int
     */
    public $duration;

    /**
     * @example 2020-03-03T12:00:00Z
     *
     * @var string
     */
    public $effectiveDate;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @example FPT_ossbag_absolute_Storage_sh
     *
     * @var string
     */
    public $packageType;

    /**
     * @example Month
     *
     * @var string
     */
    public $pricingCycle;

    /**
     * @example ossbag
     *
     * @var string
     */
    public $productCode;

    /**
     * @example 40
     *
     * @var string
     */
    public $specification;
    protected $_name = [
        'duration'      => 'Duration',
        'effectiveDate' => 'EffectiveDate',
        'ownerId'       => 'OwnerId',
        'packageType'   => 'PackageType',
        'pricingCycle'  => 'PricingCycle',
        'productCode'   => 'ProductCode',
        'specification' => 'Specification',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->effectiveDate) {
            $res['EffectiveDate'] = $this->effectiveDate;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->specification) {
            $res['Specification'] = $this->specification;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateResourcePackageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['EffectiveDate'])) {
            $model->effectiveDate = $map['EffectiveDate'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['Specification'])) {
            $model->specification = $map['Specification'];
        }

        return $model;
    }
}
