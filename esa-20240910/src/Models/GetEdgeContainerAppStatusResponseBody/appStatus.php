<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerAppStatusResponseBody;

use AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerAppStatusResponseBody\appStatus\regions;
use AlibabaCloud\Tea\Model;

class appStatus extends Model
{
    /**
     * @example ver-123123123123****
     *
     * @var string
     */
    public $baseLineVersion;

    /**
     * @example undeploy
     *
     * @var string
     */
    public $deployStatus;

    /**
     * @example 2024-07-25T05:58:05Z
     *
     * @var string
     */
    public $deployTime;

    /**
     * @example ver-123123123123****
     *
     * @var string
     */
    public $deployedVersion;

    /**
     * @example 50%
     *
     * @var int
     */
    public $expectPercentage;

    /**
     * @var bool
     */
    public $fullRelease;

    /**
     * @example prod
     *
     * @var string
     */
    public $publishEnv;

    /**
     * @example 50%
     *
     * @var int
     */
    public $publishPercentage;

    /**
     * @example pubishing
     *
     * @var string
     */
    public $publishStatus;

    /**
     * @example 2024-07-25T05:58:05Z
     *
     * @var string
     */
    public $publishTime;

    /**
     * @var string
     */
    public $publishType;

    /**
     * @example ver-123123123123****
     *
     * @var string
     */
    public $publishingVersion;

    /**
     * @var regions
     */
    public $regions;

    /**
     * @example 2024-07-25T05:58:05Z
     *
     * @var string
     */
    public $rollbackTime;

    /**
     * @example 2024-07-25T05:58:05Z
     *
     * @var string
     */
    public $unDeployTime;
    protected $_name = [
        'baseLineVersion'   => 'BaseLineVersion',
        'deployStatus'      => 'DeployStatus',
        'deployTime'        => 'DeployTime',
        'deployedVersion'   => 'DeployedVersion',
        'expectPercentage'  => 'ExpectPercentage',
        'fullRelease'       => 'FullRelease',
        'publishEnv'        => 'PublishEnv',
        'publishPercentage' => 'PublishPercentage',
        'publishStatus'     => 'PublishStatus',
        'publishTime'       => 'PublishTime',
        'publishType'       => 'PublishType',
        'publishingVersion' => 'PublishingVersion',
        'regions'           => 'Regions',
        'rollbackTime'      => 'RollbackTime',
        'unDeployTime'      => 'UnDeployTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseLineVersion) {
            $res['BaseLineVersion'] = $this->baseLineVersion;
        }
        if (null !== $this->deployStatus) {
            $res['DeployStatus'] = $this->deployStatus;
        }
        if (null !== $this->deployTime) {
            $res['DeployTime'] = $this->deployTime;
        }
        if (null !== $this->deployedVersion) {
            $res['DeployedVersion'] = $this->deployedVersion;
        }
        if (null !== $this->expectPercentage) {
            $res['ExpectPercentage'] = $this->expectPercentage;
        }
        if (null !== $this->fullRelease) {
            $res['FullRelease'] = $this->fullRelease;
        }
        if (null !== $this->publishEnv) {
            $res['PublishEnv'] = $this->publishEnv;
        }
        if (null !== $this->publishPercentage) {
            $res['PublishPercentage'] = $this->publishPercentage;
        }
        if (null !== $this->publishStatus) {
            $res['PublishStatus'] = $this->publishStatus;
        }
        if (null !== $this->publishTime) {
            $res['PublishTime'] = $this->publishTime;
        }
        if (null !== $this->publishType) {
            $res['PublishType'] = $this->publishType;
        }
        if (null !== $this->publishingVersion) {
            $res['PublishingVersion'] = $this->publishingVersion;
        }
        if (null !== $this->regions) {
            $res['Regions'] = null !== $this->regions ? $this->regions->toMap() : null;
        }
        if (null !== $this->rollbackTime) {
            $res['RollbackTime'] = $this->rollbackTime;
        }
        if (null !== $this->unDeployTime) {
            $res['UnDeployTime'] = $this->unDeployTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaseLineVersion'])) {
            $model->baseLineVersion = $map['BaseLineVersion'];
        }
        if (isset($map['DeployStatus'])) {
            $model->deployStatus = $map['DeployStatus'];
        }
        if (isset($map['DeployTime'])) {
            $model->deployTime = $map['DeployTime'];
        }
        if (isset($map['DeployedVersion'])) {
            $model->deployedVersion = $map['DeployedVersion'];
        }
        if (isset($map['ExpectPercentage'])) {
            $model->expectPercentage = $map['ExpectPercentage'];
        }
        if (isset($map['FullRelease'])) {
            $model->fullRelease = $map['FullRelease'];
        }
        if (isset($map['PublishEnv'])) {
            $model->publishEnv = $map['PublishEnv'];
        }
        if (isset($map['PublishPercentage'])) {
            $model->publishPercentage = $map['PublishPercentage'];
        }
        if (isset($map['PublishStatus'])) {
            $model->publishStatus = $map['PublishStatus'];
        }
        if (isset($map['PublishTime'])) {
            $model->publishTime = $map['PublishTime'];
        }
        if (isset($map['PublishType'])) {
            $model->publishType = $map['PublishType'];
        }
        if (isset($map['PublishingVersion'])) {
            $model->publishingVersion = $map['PublishingVersion'];
        }
        if (isset($map['Regions'])) {
            $model->regions = regions::fromMap($map['Regions']);
        }
        if (isset($map['RollbackTime'])) {
            $model->rollbackTime = $map['RollbackTime'];
        }
        if (isset($map['UnDeployTime'])) {
            $model->unDeployTime = $map['UnDeployTime'];
        }

        return $model;
    }
}
