<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDifyInstancesResponseBody\root;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $appUuid;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $edition;

    /**
     * @var string
     */
    public $enterpriseInternetUrl;

    /**
     * @var string
     */
    public $enterpriseIntranetUrl;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $internetUrl;

    /**
     * @var string
     */
    public $intranetUrl;

    /**
     * @var string
     */
    public $majorVersion;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $workspaceId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'appUuid' => 'AppUuid',
        'createdTime' => 'CreatedTime',
        'edition' => 'Edition',
        'enterpriseInternetUrl' => 'EnterpriseInternetUrl',
        'enterpriseIntranetUrl' => 'EnterpriseIntranetUrl',
        'instanceId' => 'InstanceId',
        'internetUrl' => 'InternetUrl',
        'intranetUrl' => 'IntranetUrl',
        'majorVersion' => 'MajorVersion',
        'securityGroupId' => 'SecurityGroupId',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
        'workspaceId' => 'WorkspaceId',
        'zoneId' => 'ZoneId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appUuid) {
            $res['AppUuid'] = $this->appUuid;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->edition) {
            $res['Edition'] = $this->edition;
        }
        if (null !== $this->enterpriseInternetUrl) {
            $res['EnterpriseInternetUrl'] = $this->enterpriseInternetUrl;
        }
        if (null !== $this->enterpriseIntranetUrl) {
            $res['EnterpriseIntranetUrl'] = $this->enterpriseIntranetUrl;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->internetUrl) {
            $res['InternetUrl'] = $this->internetUrl;
        }
        if (null !== $this->intranetUrl) {
            $res['IntranetUrl'] = $this->intranetUrl;
        }
        if (null !== $this->majorVersion) {
            $res['MajorVersion'] = $this->majorVersion;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppUuid'])) {
            $model->appUuid = $map['AppUuid'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Edition'])) {
            $model->edition = $map['Edition'];
        }
        if (isset($map['EnterpriseInternetUrl'])) {
            $model->enterpriseInternetUrl = $map['EnterpriseInternetUrl'];
        }
        if (isset($map['EnterpriseIntranetUrl'])) {
            $model->enterpriseIntranetUrl = $map['EnterpriseIntranetUrl'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InternetUrl'])) {
            $model->internetUrl = $map['InternetUrl'];
        }
        if (isset($map['IntranetUrl'])) {
            $model->intranetUrl = $map['IntranetUrl'];
        }
        if (isset($map['MajorVersion'])) {
            $model->majorVersion = $map['MajorVersion'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
