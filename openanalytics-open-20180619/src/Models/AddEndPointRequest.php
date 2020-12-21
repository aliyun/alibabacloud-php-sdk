<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models;

use AlibabaCloud\Tea\Model;

class AddEndPointRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $vpcID;

    /**
     * @var string
     */
    public $vswitch;

    /**
     * @var string
     */
    public $zone;

    /**
     * @var string
     */
    public $product;
    protected $_name = [
        'regionId'    => 'RegionId',
        'networkType' => 'NetworkType',
        'vpcID'       => 'VpcID',
        'vswitch'     => 'Vswitch',
        'zone'        => 'Zone',
        'product'     => 'Product',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('networkType', $this->networkType, true);
        Model::validateRequired('vpcID', $this->vpcID, true);
        Model::validateRequired('vswitch', $this->vswitch, true);
        Model::validateRequired('zone', $this->zone, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->vpcID) {
            $res['VpcID'] = $this->vpcID;
        }
        if (null !== $this->vswitch) {
            $res['Vswitch'] = $this->vswitch;
        }
        if (null !== $this->zone) {
            $res['Zone'] = $this->zone;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddEndPointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['VpcID'])) {
            $model->vpcID = $map['VpcID'];
        }
        if (isset($map['Vswitch'])) {
            $model->vswitch = $map['Vswitch'];
        }
        if (isset($map['Zone'])) {
            $model->zone = $map['Zone'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }

        return $model;
    }
}
