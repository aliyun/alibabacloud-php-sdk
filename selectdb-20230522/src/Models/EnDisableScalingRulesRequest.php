<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models;

use AlibabaCloud\Tea\Model;

class EnDisableScalingRulesRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example selectdb-cn-nwy3jv1oa02-be
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description This parameter is required.
     *
     * @example selectdb-cn-7213cjv****
     *
     * @var string
     */
    public $dbInstanceId;

    /**
     * @example selectdb
     *
     * @var string
     */
    public $product;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description This parameter is required.
     *
     * @example true
     *
     * @var bool
     */
    public $scalingRulesEnable;
    protected $_name = [
        'clusterId'          => 'ClusterId',
        'dbInstanceId'       => 'DbInstanceId',
        'product'            => 'Product',
        'regionId'           => 'RegionId',
        'resourceOwnerId'    => 'ResourceOwnerId',
        'scalingRulesEnable' => 'ScalingRulesEnable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->dbInstanceId) {
            $res['DbInstanceId'] = $this->dbInstanceId;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->scalingRulesEnable) {
            $res['ScalingRulesEnable'] = $this->scalingRulesEnable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EnDisableScalingRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DbInstanceId'])) {
            $model->dbInstanceId = $map['DbInstanceId'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ScalingRulesEnable'])) {
            $model->scalingRulesEnable = $map['ScalingRulesEnable'];
        }

        return $model;
    }
}
