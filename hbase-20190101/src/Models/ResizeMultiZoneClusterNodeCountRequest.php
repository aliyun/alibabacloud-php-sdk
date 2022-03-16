<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class ResizeMultiZoneClusterNodeCountRequest extends Model
{
    /**
     * @var string
     */
    public $arbiterVSwitchId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var int
     */
    public $coreNodeCount;

    /**
     * @var int
     */
    public $logNodeCount;

    /**
     * @var int
     */
    public $primaryCoreNodeCount;

    /**
     * @var string
     */
    public $primaryVSwitchId;

    /**
     * @var int
     */
    public $standbyCoreNodeCount;

    /**
     * @var string
     */
    public $standbyVSwitchId;
    protected $_name = [
        'arbiterVSwitchId'     => 'ArbiterVSwitchId',
        'clusterId'            => 'ClusterId',
        'coreNodeCount'        => 'CoreNodeCount',
        'logNodeCount'         => 'LogNodeCount',
        'primaryCoreNodeCount' => 'PrimaryCoreNodeCount',
        'primaryVSwitchId'     => 'PrimaryVSwitchId',
        'standbyCoreNodeCount' => 'StandbyCoreNodeCount',
        'standbyVSwitchId'     => 'StandbyVSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arbiterVSwitchId) {
            $res['ArbiterVSwitchId'] = $this->arbiterVSwitchId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->coreNodeCount) {
            $res['CoreNodeCount'] = $this->coreNodeCount;
        }
        if (null !== $this->logNodeCount) {
            $res['LogNodeCount'] = $this->logNodeCount;
        }
        if (null !== $this->primaryCoreNodeCount) {
            $res['PrimaryCoreNodeCount'] = $this->primaryCoreNodeCount;
        }
        if (null !== $this->primaryVSwitchId) {
            $res['PrimaryVSwitchId'] = $this->primaryVSwitchId;
        }
        if (null !== $this->standbyCoreNodeCount) {
            $res['StandbyCoreNodeCount'] = $this->standbyCoreNodeCount;
        }
        if (null !== $this->standbyVSwitchId) {
            $res['StandbyVSwitchId'] = $this->standbyVSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResizeMultiZoneClusterNodeCountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArbiterVSwitchId'])) {
            $model->arbiterVSwitchId = $map['ArbiterVSwitchId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CoreNodeCount'])) {
            $model->coreNodeCount = $map['CoreNodeCount'];
        }
        if (isset($map['LogNodeCount'])) {
            $model->logNodeCount = $map['LogNodeCount'];
        }
        if (isset($map['PrimaryCoreNodeCount'])) {
            $model->primaryCoreNodeCount = $map['PrimaryCoreNodeCount'];
        }
        if (isset($map['PrimaryVSwitchId'])) {
            $model->primaryVSwitchId = $map['PrimaryVSwitchId'];
        }
        if (isset($map['StandbyCoreNodeCount'])) {
            $model->standbyCoreNodeCount = $map['StandbyCoreNodeCount'];
        }
        if (isset($map['StandbyVSwitchId'])) {
            $model->standbyVSwitchId = $map['StandbyVSwitchId'];
        }

        return $model;
    }
}
