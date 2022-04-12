<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DeployApplicationRequest extends Model
{
    /**
     * @var string
     */
    public $appEnv;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $batch;

    /**
     * @var int
     */
    public $batchWaitTime;

    /**
     * @var int
     */
    public $buildPackId;

    /**
     * @var string
     */
    public $componentIds;

    /**
     * @var string
     */
    public $deployType;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var bool
     */
    public $gray;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $packageVersion;

    /**
     * @var int
     */
    public $releaseType;

    /**
     * @var string
     */
    public $trafficControlStrategy;

    /**
     * @var string
     */
    public $warUrl;
    protected $_name = [
        'appEnv'                 => 'AppEnv',
        'appId'                  => 'AppId',
        'batch'                  => 'Batch',
        'batchWaitTime'          => 'BatchWaitTime',
        'buildPackId'            => 'BuildPackId',
        'componentIds'           => 'ComponentIds',
        'deployType'             => 'DeployType',
        'desc'                   => 'Desc',
        'gray'                   => 'Gray',
        'groupId'                => 'GroupId',
        'imageUrl'               => 'ImageUrl',
        'packageVersion'         => 'PackageVersion',
        'releaseType'            => 'ReleaseType',
        'trafficControlStrategy' => 'TrafficControlStrategy',
        'warUrl'                 => 'WarUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appEnv) {
            $res['AppEnv'] = $this->appEnv;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->batch) {
            $res['Batch'] = $this->batch;
        }
        if (null !== $this->batchWaitTime) {
            $res['BatchWaitTime'] = $this->batchWaitTime;
        }
        if (null !== $this->buildPackId) {
            $res['BuildPackId'] = $this->buildPackId;
        }
        if (null !== $this->componentIds) {
            $res['ComponentIds'] = $this->componentIds;
        }
        if (null !== $this->deployType) {
            $res['DeployType'] = $this->deployType;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->gray) {
            $res['Gray'] = $this->gray;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->packageVersion) {
            $res['PackageVersion'] = $this->packageVersion;
        }
        if (null !== $this->releaseType) {
            $res['ReleaseType'] = $this->releaseType;
        }
        if (null !== $this->trafficControlStrategy) {
            $res['TrafficControlStrategy'] = $this->trafficControlStrategy;
        }
        if (null !== $this->warUrl) {
            $res['WarUrl'] = $this->warUrl;
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
        if (isset($map['AppEnv'])) {
            $model->appEnv = $map['AppEnv'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Batch'])) {
            $model->batch = $map['Batch'];
        }
        if (isset($map['BatchWaitTime'])) {
            $model->batchWaitTime = $map['BatchWaitTime'];
        }
        if (isset($map['BuildPackId'])) {
            $model->buildPackId = $map['BuildPackId'];
        }
        if (isset($map['ComponentIds'])) {
            $model->componentIds = $map['ComponentIds'];
        }
        if (isset($map['DeployType'])) {
            $model->deployType = $map['DeployType'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['Gray'])) {
            $model->gray = $map['Gray'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['PackageVersion'])) {
            $model->packageVersion = $map['PackageVersion'];
        }
        if (isset($map['ReleaseType'])) {
            $model->releaseType = $map['ReleaseType'];
        }
        if (isset($map['TrafficControlStrategy'])) {
            $model->trafficControlStrategy = $map['TrafficControlStrategy'];
        }
        if (isset($map['WarUrl'])) {
            $model->warUrl = $map['WarUrl'];
        }

        return $model;
    }
}
