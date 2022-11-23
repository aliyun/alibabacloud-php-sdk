<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eais\V20190624\Models\DescribeEaisResponseBody\instances;

use AlibabaCloud\SDK\Eais\V20190624\Models\DescribeEaisResponseBody\instances\instance\tags;
use AlibabaCloud\Tea\Model;

class instance extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $clientInstanceId;

    /**
     * @var string
     */
    public $clientInstanceName;

    /**
     * @var string
     */
    public $clientInstanceType;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $elasticAcceleratedInstanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $jupyterUrl;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
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
