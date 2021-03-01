<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DeployApplicationRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $packageVersion;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $deployType;

    /**
     * @var string
     */
    public $warUrl;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var int
     */
    public $batch;

    /**
     * @var int
     */
    public $batchWaitTime;

    /**
     * @var string
     */
    public $appEnv;

    /**
     * @var int
     */
    public $buildPackId;

    /**
     * @var string
     */
    public $componentIds;

    /**
     * @var int
     */
    public $releaseType;

    /**
     * @var bool
     */
    public $gray;

    /**
     * @var string
     */
    public $trafficControlStrategy;
    protected $_name = [
        'appId'                  => 'AppId',
        'packageVersion'         => 'PackageVersion',
        'desc'                   => 'Desc',
        'deployType'             => 'DeployType',
        'warUrl'                 => 'WarUrl',
        'imageUrl'               => 'ImageUrl',
        'groupId'                => 'GroupId',
        'batch'                  => 'Batch',
        'batchWaitTime'          => 'BatchWaitTime',
        'appEnv'                 => 'AppEnv',
        'buildPackId'            => 'BuildPackId',
        'componentIds'           => 'ComponentIds',
        'releaseType'            => 'ReleaseType',
        'gray'                   => 'Gray',
        'trafficControlStrategy' => 'TrafficControlStrategy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->packageVersion) {
            $res['PackageVersion'] = $this->packageVersion;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->deployType) {
            $res['DeployType'] = $this->deployType;
        }
        if (null !== $this->warUrl) {
            $res['WarUrl'] = $this->warUrl;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->batch) {
            $res['Batch'] = $this->batch;
        }
        if (null !== $this->batchWaitTime) {
            $res['BatchWaitTime'] = $this->batchWaitTime;
        }
        if (null !== $this->appEnv) {
            $res['AppEnv'] = $this->appEnv;
        }
        if (null !== $this->buildPackId) {
            $res['BuildPackId'] = $this->buildPackId;
        }
        if (null !== $this->componentIds) {
            $res['ComponentIds'] = $this->componentIds;
        }
        if (null !== $this->releaseType) {
            $res['ReleaseType'] = $this->releaseType;
        }
        if (null !== $this->gray) {
            $res['Gray'] = $this->gray;
        }
        if (null !== $this->trafficControlStrategy) {
            $res['TrafficControlStrategy'] = $this->trafficControlStrategy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeployApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['PackageVersion'])) {
            $model->packageVersion = $map['PackageVersion'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['DeployType'])) {
            $model->deployType = $map['DeployType'];
        }
        if (isset($map['WarUrl'])) {
            $model->warUrl = $map['WarUrl'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Batch'])) {
            $model->batch = $map['Batch'];
        }
        if (isset($map['BatchWaitTime'])) {
            $model->batchWaitTime = $map['BatchWaitTime'];
        }
        if (isset($map['AppEnv'])) {
            $model->appEnv = $map['AppEnv'];
        }
        if (isset($map['BuildPackId'])) {
            $model->buildPackId = $map['BuildPackId'];
        }
        if (isset($map['ComponentIds'])) {
            $model->componentIds = $map['ComponentIds'];
        }
        if (isset($map['ReleaseType'])) {
            $model->releaseType = $map['ReleaseType'];
        }
        if (isset($map['Gray'])) {
            $model->gray = $map['Gray'];
        }
        if (isset($map['TrafficControlStrategy'])) {
            $model->trafficControlStrategy = $map['TrafficControlStrategy'];
        }

        return $model;
    }
}
