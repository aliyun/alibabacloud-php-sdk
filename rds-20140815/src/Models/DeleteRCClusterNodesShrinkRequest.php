<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class DeleteRCClusterNodesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $instanceIdsShrink;

    /**
     * @var string
     */
    public $nodesShrink;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'instanceIdsShrink' => 'InstanceIds',
        'nodesShrink' => 'Nodes',
        'regionId' => 'RegionId',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceIdsShrink) {
            $res['InstanceIds'] = $this->instanceIdsShrink;
        }

        if (null !== $this->nodesShrink) {
            $res['Nodes'] = $this->nodesShrink;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceIds'])) {
            $model->instanceIdsShrink = $map['InstanceIds'];
        }

        if (isset($map['Nodes'])) {
            $model->nodesShrink = $map['Nodes'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
