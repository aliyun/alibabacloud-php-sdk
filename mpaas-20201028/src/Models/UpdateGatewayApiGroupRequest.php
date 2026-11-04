<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\Dara\Model;

class UpdateGatewayApiGroupRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var mixed[]
     */
    public $centers;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var bool
     */
    public $enableMTLS;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $host;

    /**
     * @var bool
     */
    public $httpsModel;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $instancePort;

    /**
     * @var bool
     */
    public $regionMode;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var string
     */
    public $upstreamType;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var bool
     */
    public $vpcModel;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'appId' => 'AppId',
        'centers' => 'Centers',
        'description' => 'Description',
        'domainName' => 'DomainName',
        'enableMTLS' => 'EnableMTLS',
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
        'host' => 'Host',
        'httpsModel' => 'HttpsModel',
        'instanceId' => 'InstanceId',
        'instancePort' => 'InstancePort',
        'regionMode' => 'RegionMode',
        'tenantId' => 'TenantId',
        'timeout' => 'Timeout',
        'upstreamType' => 'UpstreamType',
        'vpcId' => 'VpcId',
        'vpcModel' => 'VpcModel',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->centers)) {
            Model::validateArray($this->centers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->centers) {
            if (\is_array($this->centers)) {
                $res['Centers'] = [];
                foreach ($this->centers as $key1 => $value1) {
                    $res['Centers'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->enableMTLS) {
            $res['EnableMTLS'] = $this->enableMTLS;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }

        if (null !== $this->httpsModel) {
            $res['HttpsModel'] = $this->httpsModel;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instancePort) {
            $res['InstancePort'] = $this->instancePort;
        }

        if (null !== $this->regionMode) {
            $res['RegionMode'] = $this->regionMode;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        if (null !== $this->upstreamType) {
            $res['UpstreamType'] = $this->upstreamType;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        if (null !== $this->vpcModel) {
            $res['VpcModel'] = $this->vpcModel;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['Centers'])) {
            if (!empty($map['Centers'])) {
                $model->centers = [];
                foreach ($map['Centers'] as $key1 => $value1) {
                    $model->centers[$key1] = $value1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['EnableMTLS'])) {
            $model->enableMTLS = $map['EnableMTLS'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }

        if (isset($map['HttpsModel'])) {
            $model->httpsModel = $map['HttpsModel'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstancePort'])) {
            $model->instancePort = $map['InstancePort'];
        }

        if (isset($map['RegionMode'])) {
            $model->regionMode = $map['RegionMode'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        if (isset($map['UpstreamType'])) {
            $model->upstreamType = $map['UpstreamType'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        if (isset($map['VpcModel'])) {
            $model->vpcModel = $map['VpcModel'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
