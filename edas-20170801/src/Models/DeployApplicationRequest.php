<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DeployApplicationRequest extends Model
{
    /**
     * @description The environment variables of the application. Specify each environment variable by using two key-value pairs. Example: `{"name":"x","value":"y"},{"name":"x2","value":"y2"}`. The `keys` of the two key-value pairs are `name` and `value`.
     *
     * @example [{\"name\":\"env_name_1\", \"value\":\"env_value_1\"}, {\"name\":\"env_name_2\",\"value\":\"env_value_2\"}]
     *
     * @var string
     */
    public $appEnv;

    /**
     * @description The ID of the application. You can call the ListApplication operation to query the application ID. For more information, see [ListApplication](~~423162~~).
     *
     * @example 3616cdca-********************
     *
     * @var string
     */
    public $appId;

    /**
     * @description The number of batches per instance group.
     *
     *   If you specify an ID when you set the GroupId parameter, the application is deployed to the specified instance group. The minimum number of batches that can be specified is 1. The maximum number of batches is the maximum number of ECS instances in the Normal state in the instance group. The actual value falls in the range of \[1, specified number]. The specified number of batches equals the number of ECS instances in the specified instance group.
     *   If you set the GroupId parameter to all, the application is deployed to all instance groups. The minimum number of batches that can be specified is 1. The maximum number of batches is the number of ECS instances in the instance group that has the largest number of ECS instances in the Normal state.
     *
     * @example 1
     *
     * @var int
     */
    public $batch;

    /**
     * @description The wait time between deployment batches for the application. Unit: minutes.
     *
     *   Default value: 0. If no wait time between deployment batches is needed, set this parameter to 0.
     *   Maximum value: 5.
     *
     * If many deployment batches are needed, we recommend that you specify a small value for this parameter. Otherwise, the application deployment is time-consuming.
     * @example 0
     *
     * @var int
     */
    public $batchWaitTime;

    /**
     * @description The build package number of EDAS Container.
     *
     *   You do not need to set the parameter if you do not need to change the EDAS Container version during the deployment.
     *   Set the parameter if you need to update the EDAS Container version of the application during the deployment.
     *
     * You can query the build package number by using one of the following methods:
     *
     *   Call the ListBuildPack operation. For more information, see [ListBuildPack](~~149391~~).
     *   Obtain the value in the **Build package number** column of the [Release notes for EDAS Container](~~92614~~) topic. For example, `59` indicates `EDAS Container 3.5.8`.
     *
     * @example 59
     *
     * @var int
     */
    public $buildPackId;

    /**
     * @description The IDs of the components used by the application. The parameter is not applicable to High-Speed Framework (HSF) applications. You can call the ListComponents operation to query the component IDs. For more information, see [ListComponents](~~423223~~).
     *
     *   If you have specified the component IDs when you create the application, you do not need to set the parameter when you deploy the application.
     *   Set the parameter if you need to update the component versions for the application during the deployment.
     *
     * Valid values for common application components:
     *
     *   4: Apache Tomcat 7.0.91
     *   7: Apache Tomcat 8.5.42
     *   5: OpenJDK 1.8.x
     *   6: OpenJDK 1.7.x
     *
     * For more information, see the Common application parameters section of the [InsertApplication](~~423185~~) topic.
     * @example 7
     *
     * @var string
     */
    public $componentIds;

    /**
     * @description The deployment mode of the application. Valid values: `url` and `image`. The image value is deprecated. You can deploy an application to a Swarm cluster only by using an image.``
     *
     * @example URL
     *
     * @var string
     */
    public $deployType;

    /**
     * @description The description of the application deployment.
     *
     * @example Deploy by edas pop api
     *
     * @var string
     */
    public $desc;

    /**
     * @description Specifies whether canary release is selected as the deployment method. Valid values:
     *
     *   true: Canary release is selected.
     *
     *   To implement a canary release, specify the GroupId parameter, which specifies the ID of the instance group for the canary release.
     *   Canary release can be selected as the deployment method for only one batch.
     *   After the canary release is complete, the application is released in regular mode. The Batch parameter specifies the number of batches.
     *
     *   false: Single-batch release or phased release is selected.
     *
     * @example true
     *
     * @var bool
     */
    public $gray;

    /**
     * @description The ID of the instance group to which the application is deployed. You can call the ListDeployGroup operation to query the ID of the instance group. For more information, see [ListDeployGroup](~~423184~~).
     *
     * Set the parameter to `all` if you want to deploy the application to all instance groups.
     * @example all
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The URL of the application image that is used to deploy the application in a Swarm cluster. We recommend that you use an image that is stored in Alibaba Cloud Container Registry. This parameter is deprecated.
     *
     * @example registry.cn-hangzhou.aliyuncs.com/mw/testapp:latest
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @description The version of the application deployment package. The value can be up to 64 characters in length. We recommend that you use a timestamp.
     *
     * @example 1.0
     *
     * @var string
     */
    public $packageVersion;

    /**
     * @description The mode in which the deployment batches are triggered. Valid values:
     *
     *   0: automatic.
     *   1: You must manually trigger the next batch. You can manually click **Proceed to Next Batch** in the console or call the ContinuePipeline operation to proceed to the next batch. We recommend that you choose the automatic mode when you call an API operation to deploy the application. For more information, see [ContinuePipeline](~~126990~~).
     *
     * @example 0
     *
     * @var int
     */
    public $releaseType;

    /**
     * @description The canary release policy. For more information about canary release policies, see [DeployK8sApplication](~~423212~~).
     *
     * @example {"http":{"rules":[{"conditionType":"percent","percent":10}]}}
     *
     * @var string
     */
    public $trafficControlStrategy;

    /**
     * @description The URL of the application deployment package. The package can be a WAR or JAR package. This parameter is required if you set the **DeployType** parameter to `url`. We recommend that you specify the URL of an application deployment package that is stored in an Object Storage Service (OSS) bucket.
     *
     * @example https://edas.oss-cn-hangzhou.aliyuncs.com/demo/hello-edas.war
     *
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
