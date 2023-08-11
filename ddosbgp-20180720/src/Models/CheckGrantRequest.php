<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Tea\Model;

class CheckGrantRequest extends Model
{
    /**
     * @var bool
     */
    public $isSlr;

    /**
     * @description WB269094
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description CheckGrant
     *
     * @example rg-acfm2pz25js****
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'isSlr'           => 'IsSlr',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isSlr) {
            $res['IsSlr'] = $this->isSlr;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckGrantRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsSlr'])) {
            $model->isSlr = $map['IsSlr'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
