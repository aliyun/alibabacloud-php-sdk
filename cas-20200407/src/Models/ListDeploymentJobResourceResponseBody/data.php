<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models\ListDeploymentJobResourceResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $certEndTime;

    /**
     * @var int
     */
    public $certId;

    /**
     * @var string
     */
    public $certName;

    /**
     * @var string
     */
    public $certStartTime;

    /**
     * @var string
     */
    public $cloudAccessId;

    /**
     * @var string
     */
    public $cloudName;

    /**
     * @var string
     */
    public $cloudProduct;

    /**
     * @var string
     */
    public $cloudRegion;

    /**
     * @var int
     */
    public $defaultResource;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $enableHttps;

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
    public $instanceId;

    /**
     * @var string
     */
    public $listenerId;

    /**
     * @var string
     */
    public $listenerPort;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $useSsl;

    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'certEndTime' => 'CertEndTime',
        'certId' => 'CertId',
        'certName' => 'CertName',
        'certStartTime' => 'CertStartTime',
        'cloudAccessId' => 'CloudAccessId',
        'cloudName' => 'CloudName',
        'cloudProduct' => 'CloudProduct',
        'cloudRegion' => 'CloudRegion',
        'defaultResource' => 'DefaultResource',
        'domain' => 'Domain',
        'enableHttps' => 'EnableHttps',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'instanceId' => 'InstanceId',
        'listenerId' => 'ListenerId',
        'listenerPort' => 'ListenerPort',
        'regionId' => 'RegionId',
        'remark' => 'Remark',
        'status' => 'Status',
        'useSsl' => 'UseSsl',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certEndTime) {
            $res['CertEndTime'] = $this->certEndTime;
        }

        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
        }

        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }

        if (null !== $this->certStartTime) {
            $res['CertStartTime'] = $this->certStartTime;
        }

        if (null !== $this->cloudAccessId) {
            $res['CloudAccessId'] = $this->cloudAccessId;
        }

        if (null !== $this->cloudName) {
            $res['CloudName'] = $this->cloudName;
        }

        if (null !== $this->cloudProduct) {
            $res['CloudProduct'] = $this->cloudProduct;
        }

        if (null !== $this->cloudRegion) {
            $res['CloudRegion'] = $this->cloudRegion;
        }

        if (null !== $this->defaultResource) {
            $res['DefaultResource'] = $this->defaultResource;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->enableHttps) {
            $res['EnableHttps'] = $this->enableHttps;
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

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }

        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->useSsl) {
            $res['UseSsl'] = $this->useSsl;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['CertEndTime'])) {
            $model->certEndTime = $map['CertEndTime'];
        }

        if (isset($map['CertId'])) {
            $model->certId = $map['CertId'];
        }

        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }

        if (isset($map['CertStartTime'])) {
            $model->certStartTime = $map['CertStartTime'];
        }

        if (isset($map['CloudAccessId'])) {
            $model->cloudAccessId = $map['CloudAccessId'];
        }

        if (isset($map['CloudName'])) {
            $model->cloudName = $map['CloudName'];
        }

        if (isset($map['CloudProduct'])) {
            $model->cloudProduct = $map['CloudProduct'];
        }

        if (isset($map['CloudRegion'])) {
            $model->cloudRegion = $map['CloudRegion'];
        }

        if (isset($map['DefaultResource'])) {
            $model->defaultResource = $map['DefaultResource'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['EnableHttps'])) {
            $model->enableHttps = $map['EnableHttps'];
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

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }

        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UseSsl'])) {
            $model->useSsl = $map['UseSsl'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
