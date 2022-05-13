<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $appClusterId;

    /**
     * @var string
     */
    public $appVersion;

    /**
     * @var string
     */
    public $dbPassword;

    /**
     * @var string
     */
    public $dbUrl;

    /**
     * @var string
     */
    public $dbUserName;

    /**
     * @var int
     */
    public $endDate;

    /**
     * @var int
     */
    public $environmentId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $imageVersion;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $isCreatedRedis;

    /**
     * @var int
     */
    public $k8sResourceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nameServer;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $podCidr;

    /**
     * @var string
     */
    public $primaryUser;

    /**
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $replica;

    /**
     * @var string
     */
    public $seataServerUniqueId;

    /**
     * @var string
     */
    public $securityGroup;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $statusDesc;

    /**
     * @var string
     */
    public $storeMode;

    /**
     * @var string
     */
    public $vpc;

    /**
     * @var string
     */
    public $vswitch;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'appClusterId'        => 'AppClusterId',
        'appVersion'          => 'AppVersion',
        'dbPassword'          => 'DbPassword',
        'dbUrl'               => 'DbUrl',
        'dbUserName'          => 'DbUserName',
        'endDate'             => 'EndDate',
        'environmentId'       => 'EnvironmentId',
        'gmtCreate'           => 'GmtCreate',
        'gmtModified'         => 'GmtModified',
        'id'                  => 'Id',
        'imageVersion'        => 'ImageVersion',
        'instanceId'          => 'InstanceId',
        'isCreatedRedis'      => 'IsCreatedRedis',
        'k8sResourceId'       => 'K8sResourceId',
        'name'                => 'Name',
        'nameServer'          => 'NameServer',
        'orderId'             => 'OrderId',
        'podCidr'             => 'PodCidr',
        'primaryUser'         => 'PrimaryUser',
        'region'              => 'Region',
        'replica'             => 'Replica',
        'seataServerUniqueId' => 'SeataServerUniqueId',
        'securityGroup'       => 'SecurityGroup',
        'spec'                => 'Spec',
        'startDate'           => 'StartDate',
        'status'              => 'Status',
        'statusDesc'          => 'StatusDesc',
        'storeMode'           => 'StoreMode',
        'vpc'                 => 'Vpc',
        'vswitch'             => 'Vswitch',
        'zoneId'              => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appClusterId) {
            $res['AppClusterId'] = $this->appClusterId;
        }
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->dbPassword) {
            $res['DbPassword'] = $this->dbPassword;
        }
        if (null !== $this->dbUrl) {
            $res['DbUrl'] = $this->dbUrl;
        }
        if (null !== $this->dbUserName) {
            $res['DbUserName'] = $this->dbUserName;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->environmentId) {
            $res['EnvironmentId'] = $this->environmentId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->imageVersion) {
            $res['ImageVersion'] = $this->imageVersion;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->isCreatedRedis) {
            $res['IsCreatedRedis'] = $this->isCreatedRedis;
        }
        if (null !== $this->k8sResourceId) {
            $res['K8sResourceId'] = $this->k8sResourceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nameServer) {
            $res['NameServer'] = $this->nameServer;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->podCidr) {
            $res['PodCidr'] = $this->podCidr;
        }
        if (null !== $this->primaryUser) {
            $res['PrimaryUser'] = $this->primaryUser;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->replica) {
            $res['Replica'] = $this->replica;
        }
        if (null !== $this->seataServerUniqueId) {
            $res['SeataServerUniqueId'] = $this->seataServerUniqueId;
        }
        if (null !== $this->securityGroup) {
            $res['SecurityGroup'] = $this->securityGroup;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusDesc) {
            $res['StatusDesc'] = $this->statusDesc;
        }
        if (null !== $this->storeMode) {
            $res['StoreMode'] = $this->storeMode;
        }
        if (null !== $this->vpc) {
            $res['Vpc'] = $this->vpc;
        }
        if (null !== $this->vswitch) {
            $res['Vswitch'] = $this->vswitch;
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
        if (isset($map['AppClusterId'])) {
            $model->appClusterId = $map['AppClusterId'];
        }
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['DbPassword'])) {
            $model->dbPassword = $map['DbPassword'];
        }
        if (isset($map['DbUrl'])) {
            $model->dbUrl = $map['DbUrl'];
        }
        if (isset($map['DbUserName'])) {
            $model->dbUserName = $map['DbUserName'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['EnvironmentId'])) {
            $model->environmentId = $map['EnvironmentId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ImageVersion'])) {
            $model->imageVersion = $map['ImageVersion'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IsCreatedRedis'])) {
            $model->isCreatedRedis = $map['IsCreatedRedis'];
        }
        if (isset($map['K8sResourceId'])) {
            $model->k8sResourceId = $map['K8sResourceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NameServer'])) {
            $model->nameServer = $map['NameServer'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['PodCidr'])) {
            $model->podCidr = $map['PodCidr'];
        }
        if (isset($map['PrimaryUser'])) {
            $model->primaryUser = $map['PrimaryUser'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Replica'])) {
            $model->replica = $map['Replica'];
        }
        if (isset($map['SeataServerUniqueId'])) {
            $model->seataServerUniqueId = $map['SeataServerUniqueId'];
        }
        if (isset($map['SecurityGroup'])) {
            $model->securityGroup = $map['SecurityGroup'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusDesc'])) {
            $model->statusDesc = $map['StatusDesc'];
        }
        if (isset($map['StoreMode'])) {
            $model->storeMode = $map['StoreMode'];
        }
        if (isset($map['Vpc'])) {
            $model->vpc = $map['Vpc'];
        }
        if (isset($map['Vswitch'])) {
            $model->vswitch = $map['Vswitch'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
