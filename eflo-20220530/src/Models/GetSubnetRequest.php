<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Tea\Model;

class GetSubnetRequest extends Model
{
    /**
     * @description The region ID of the data center.
     *
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the Lingjun subnet instance.
     *
     * This parameter is required.
     * @example subnet-2avf0itf
     *
     * @var string
     */
    public $subnetId;

    /**
     * @description The ID of the CIDR block to which Lingjun belongs.
     *
     * @example vpd-cxcmdk1m
     *
     * @var string
     */
    public $vpdId;
    protected $_name = [
        'regionId' => 'RegionId',
        'subnetId' => 'SubnetId',
        'vpdId'    => 'VpdId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->subnetId) {
            $res['SubnetId'] = $this->subnetId;
        }
        if (null !== $this->vpdId) {
            $res['VpdId'] = $this->vpdId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSubnetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SubnetId'])) {
            $model->subnetId = $map['SubnetId'];
        }
        if (isset($map['VpdId'])) {
            $model->vpdId = $map['VpdId'];
        }

        return $model;
    }
}
