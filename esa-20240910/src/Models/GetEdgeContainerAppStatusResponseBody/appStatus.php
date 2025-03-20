<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerAppStatusResponseBody;

use AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerAppStatusResponseBody\appStatus\regions;
use AlibabaCloud\Tea\Model;

class appStatus extends Model
{
    /**
     * @description The base version of the application.
     *
     * @example ver-123123123123****
     *
     * @var string
     */
    public $baseLineVersion;

    /**
     * @description The deployment status of the application.
     *
     *   **undeploy**: The application is not deployed.
     *   **deploying**: The application is being deployed.
     *   **deployed**: The application is deployed.
     *   **undeploying**: The deployment is being canceled.
     *
     * @example undeploy
     *
     * @var string
     */
    public $deployStatus;

    /**
     * @description The time when the application was deployed. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2024-07-25T05:58:05Z
     *
     * @var string
     */
    public $deployTime;

    /**
     * @description The release version of the application.
     *
     * @example ver-123123123123****
     *
     * @var string
     */
    public $deployedVersion;

    /**
     * @description The expected release percentage of the application.
     *
     * @example 50%
     *
     * @var int
     */
    public $expectPercentage;

    /**
     * @description Specifies whether to fully release the version. This parameter takes effect only when PublishType is set to region.
     *
     * @example true
     *
     * @var bool
     */
    public $fullRelease;

    /**
     * @description The environment to which the application was released. Valid values:
     *
     *   **prod**: the production environment.
     *   **staging**: the staging environment.
     *
     * @example prod
     *
     * @var string
     */
    public $publishEnv;

    /**
     * @description The release percentage of the application.
     *
     * @example 50%
     *
     * @var int
     */
    public $publishPercentage;

    /**
     * @description The release status of the application. Valid values:
     *
     *   **publishing**
     *   **published**
     *   **rollbacking**
     *   **rollbacked**
     *
     * @example pubishing
     *
     * @var string
     */
    public $publishStatus;

    /**
     * @description The time when the application was released. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2024-07-25T05:58:05Z
     *
     * @var string
     */
    public $publishTime;

    /**
     * @description Specifies how the version is released. Valid values:
     *
     *   percentage: releases the version by percentage.
     *   region: releases the version by region.
     *
     * If you do not specify this parameter, the version is released by percentage by default.
     *
     * @example percentage
     *
     * @var string
     */
    public $publishType;

    /**
     * @description The release version of the application.
     *
     * @example ver-123123123123****
     *
     * @var string
     */
    public $publishingVersion;

    /**
     * @description The regions to which the version is released.
     *
     * @var regions
     */
    public $regions;

    /**
     * @description The time when the last rollback was performed.
     *
     * @example 2024-07-25T05:58:05Z
     *
     * @var string
     */
    public $rollbackTime;

    /**
     * @description The time when the application deployment was canceled. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2024-07-25T05:58:05Z
     *
     * @var string
     */
    public $unDeployTime;
    protected $_name = [
        'baseLineVersion' => 'BaseLineVersion',
        'deployStatus' => 'DeployStatus',
        'deployTime' => 'DeployTime',
        'deployedVersion' => 'DeployedVersion',
        'expectPercentage' => 'ExpectPercentage',
        'fullRelease' => 'FullRelease',
        'publishEnv' => 'PublishEnv',
        'publishPercentage' => 'PublishPercentage',
        'publishStatus' => 'PublishStatus',
        'publishTime' => 'PublishTime',
        'publishType' => 'PublishType',
        'publishingVersion' => 'PublishingVersion',
        'regions' => 'Regions',
        'rollbackTime' => 'RollbackTime',
        'unDeployTime' => 'UnDeployTime',
    ];

    public function validate() {}

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
