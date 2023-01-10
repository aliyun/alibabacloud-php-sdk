<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eais\V20190624\Models\DescribeEaisResponseBody\instances;

use AlibabaCloud\SDK\Eais\V20190624\Models\DescribeEaisResponseBody\instances\instance\tags;
use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @example jupyter
     *
     * @var string
     */
    public $category;

    /**
     * @example i-wz93g6pyat2g****
     *
     * @var string
     */
    public $clientInstanceId;

    /**
     * @example test1
     *
     * @var string
     */
    public $clientInstanceName;

    /**
     * @example ecs.g5ne.large
     *
     * @var string
     */
    public $clientInstanceType;

    /**
     * @example 2020-11-11T03:11Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @example eais-sz8t15a7gt7****
     *
     * @var string
     */
    public $elasticAcceleratedInstanceId;

    /**
     * @example testName
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example eais.ei-a6.2xlarge
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example http://121.41.**.24:8888
     *
     * @var string
     */
    public $jupyterUrl;

    /**
     * @example cn-shenzhen
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example sg-bp1gppir818lx4******
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @example InUse
     *
     * @var string
     */
    public $status;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @example vsw-bp1sd131hfmd76r******
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example cn-shenzhen-e
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'category'                     => 'Category',
        'clientInstanceId'             => 'ClientInstanceId',
        'clientInstanceName'           => 'ClientInstanceName',
        'clientInstanceType'           => 'ClientInstanceType',
        'creationTime'                 => 'CreationTime',
        'description'                  => 'Description',
        'elasticAcceleratedInstanceId' => 'ElasticAcceleratedInstanceId',
        'instanceName'                 => 'InstanceName',
        'instanceType'                 => 'InstanceType',
        'jupyterUrl'                   => 'JupyterUrl',
        'regionId'                     => 'RegionId',
        'resourceGroupId'              => 'ResourceGroupId',
        'securityGroupId'              => 'SecurityGroupId',
        'startTime'                    => 'StartTime',
        'status'                       => 'Status',
        'tags'                         => 'Tags',
        'vSwitchId'                    => 'VSwitchId',
        'zoneId'                       => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->clientInstanceId) {
            $res['ClientInstanceId'] = $this->clientInstanceId;
        }
        if (null !== $this->clientInstanceName) {
            $res['ClientInstanceName'] = $this->clientInstanceName;
        }
        if (null !== $this->clientInstanceType) {
            $res['ClientInstanceType'] = $this->clientInstanceType;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->elasticAcceleratedInstanceId) {
            $res['ElasticAcceleratedInstanceId'] = $this->elasticAcceleratedInstanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->jupyterUrl) {
            $res['JupyterUrl'] = $this->jupyterUrl;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['ClientInstanceId'])) {
            $model->clientInstanceId = $map['ClientInstanceId'];
        }
        if (isset($map['ClientInstanceName'])) {
            $model->clientInstanceName = $map['ClientInstanceName'];
        }
        if (isset($map['ClientInstanceType'])) {
            $model->clientInstanceType = $map['ClientInstanceType'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ElasticAcceleratedInstanceId'])) {
            $model->elasticAcceleratedInstanceId = $map['ElasticAcceleratedInstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['JupyterUrl'])) {
            $model->jupyterUrl = $map['JupyterUrl'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
