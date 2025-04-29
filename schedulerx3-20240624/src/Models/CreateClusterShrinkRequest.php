<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models;

use AlibabaCloud\Dara\Model;

class CreateClusterShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $clusterSpec;

    /**
     * @var string
     */
    public $engineType;

    /**
     * @var string
     */
    public $vSwitchesShrink;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'clusterName' => 'ClusterName',
        'clusterSpec' => 'ClusterSpec',
        'engineType' => 'EngineType',
        'vSwitchesShrink' => 'VSwitches',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }

        if (null !== $this->clusterSpec) {
            $res['ClusterSpec'] = $this->clusterSpec;
        }

        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }

        if (null !== $this->vSwitchesShrink) {
            $res['VSwitches'] = $this->vSwitchesShrink;
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
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }

        if (isset($map['ClusterSpec'])) {
            $model->clusterSpec = $map['ClusterSpec'];
        }

        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }

        if (isset($map['VSwitches'])) {
            $model->vSwitchesShrink = $map['VSwitches'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
