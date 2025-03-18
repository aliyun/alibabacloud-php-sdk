<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApisByVpcAccessResponseBody\apiVpcAccessInfos;

use AlibabaCloud\Tea\Model;

class apiVpcAccessInfo extends Model
{
    /**
     * @description The API ID.
     *
     * @example 09839002de484e76b5a213b040a6a3ca
     *
     * @var string
     */
    public $apiId;

    /**
     * @description The API name.
     *
     * @example iwc
     *
     * @var string
     */
    public $apiName;

    /**
     * @description The description, which can be up to 200 characters in length.
     *
     * @example 123
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the API group to which the API belongs.
     *
     * @example 41c33748cbfb41f6b00870156203b72a
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the API group to which the API belongs.
     *
     * @example RT_PLU_IP_CTRL_group
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The instance ID or IP address in the VPC access authorization.
     *
     * @example Ib-04e41XXXXXd95e9c1
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The HTTP request method of the API.
     *
     * @example POST
     *
     * @var string
     */
    public $method;

    /**
     * @description The request path of the API.
     *
     * @example /api/v1/friends/rc/status
     *
     * @var string
     */
    public $path;

    /**
     * @description The port number.
     *
     * @example 443
     *
     * @var int
     */
    public $port;

    /**
     * @description The region ID.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The environment ID.
     *
     * @example 57e17906a69b4424914fb1e05f67c78a
     *
     * @var string
     */
    public $stageId;

    /**
     * @description The environment to which the API is published. Valid values:
     *
     *   **RELEASE**: the production environment
     *   **PRE**: the staging environment
     *   **TEST**: the test environment
     *
     * @example RELEASE
     *
     * @var string
     */
    public $stageName;

    /**
     * @description vpc id
     *
     * @example vpc-2ze7bj64wstznvftrskbk
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The name of the VPC access authorization.
     *
     * @example aliYun_service_prod
     *
     * @var string
     */
    public $vpcName;
    protected $_name = [
        'apiId' => 'ApiId',
        'apiName' => 'ApiName',
        'description' => 'Description',
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
        'instanceId' => 'InstanceId',
        'method' => 'Method',
        'path' => 'Path',
        'port' => 'Port',
        'regionId' => 'RegionId',
        'stageId' => 'StageId',
        'stageName' => 'StageName',
        'vpcId' => 'VpcId',
        'vpcName' => 'VpcName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->stageId) {
            $res['StageId'] = $this->stageId;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpcName) {
            $res['VpcName'] = $this->vpcName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiVpcAccessInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StageId'])) {
            $model->stageId = $map['StageId'];
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpcName'])) {
            $model->vpcName = $map['VpcName'];
        }

        return $model;
    }
}
