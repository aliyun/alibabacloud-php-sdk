<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models;

use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\CreateClusterShrinkRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateClusterShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example qianxi-test-0812
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description This parameter is required.
     *
     * @example scx.dev.x1
     *
     * @var string
     */
    public $clusterSpec;

    /**
     * @description This parameter is required.
     *
     * @example xxljob
     *
     * @var string
     */
    public $engineType;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $vSwitchesShrink;

    /**
     * @description VPC id
     *
     * This parameter is required.
     *
     * @example vpc-aa1a18236n90rqhuhhnhh
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'clusterName' => 'ClusterName',
        'clusterSpec' => 'ClusterSpec',
        'engineType' => 'EngineType',
        'tag' => 'Tag',
        'vSwitchesShrink' => 'VSwitches',
        'vpcId' => 'VpcId',
    ];

    public function validate() {}

    public function toMap()
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
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vSwitchesShrink) {
            $res['VSwitches'] = $this->vSwitchesShrink;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateClusterShrinkRequest
     */
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
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
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
