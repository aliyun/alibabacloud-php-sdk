<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListEdgeContainerAppsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListEdgeContainerAppsResponseBody\apps\healthCheck;

class apps extends Model
{
    /**
     * @var string
     */
    public $appId;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $domainName;
    /**
     * @var string
     */
    public $gatewayType;
    /**
     * @var healthCheck
     */
    public $healthCheck;
    /**
     * @var string
     */
    public $name;
    /**
     * @var int
     */
    public $percentage;
    /**
     * @var string
     */
    public $quicCid;
    /**
     * @var string
     */
    public $remarks;
    /**
     * @var int
     */
    public $servicePort;
    /**
     * @var string
     */
    public $status;
    /**
     * @var int
     */
    public $targetPort;
    /**
     * @var string
     */
    public $updateTime;
    /**
     * @var int
     */
    public $versionCount;
    protected $_name = [
        'appId'        => 'AppId',
        'createTime'   => 'CreateTime',
        'domainName'   => 'DomainName',
        'gatewayType'  => 'GatewayType',
        'healthCheck'  => 'HealthCheck',
        'name'         => 'Name',
        'percentage'   => 'Percentage',
        'quicCid'      => 'QuicCid',
        'remarks'      => 'Remarks',
        'servicePort'  => 'ServicePort',
        'status'       => 'Status',
        'targetPort'   => 'TargetPort',
        'updateTime'   => 'UpdateTime',
        'versionCount' => 'VersionCount',
    ];

    public function validate()
    {
        if (null !== $this->healthCheck) {
            $this->healthCheck->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->gatewayType) {
            $res['GatewayType'] = $this->gatewayType;
        }

        if (null !== $this->healthCheck) {
            $res['HealthCheck'] = null !== $this->healthCheck ? $this->healthCheck->toArray($noStream) : $this->healthCheck;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->percentage) {
            $res['Percentage'] = $this->percentage;
        }

        if (null !== $this->quicCid) {
            $res['QuicCid'] = $this->quicCid;
        }

        if (null !== $this->remarks) {
            $res['Remarks'] = $this->remarks;
        }

        if (null !== $this->servicePort) {
            $res['ServicePort'] = $this->servicePort;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->targetPort) {
            $res['TargetPort'] = $this->targetPort;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->versionCount) {
            $res['VersionCount'] = $this->versionCount;
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

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['GatewayType'])) {
            $model->gatewayType = $map['GatewayType'];
        }

        if (isset($map['HealthCheck'])) {
            $model->healthCheck = healthCheck::fromMap($map['HealthCheck']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Percentage'])) {
            $model->percentage = $map['Percentage'];
        }

        if (isset($map['QuicCid'])) {
            $model->quicCid = $map['QuicCid'];
        }

        if (isset($map['Remarks'])) {
            $model->remarks = $map['Remarks'];
        }

        if (isset($map['ServicePort'])) {
            $model->servicePort = $map['ServicePort'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TargetPort'])) {
            $model->targetPort = $map['TargetPort'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['VersionCount'])) {
            $model->versionCount = $map['VersionCount'];
        }

        return $model;
    }
}
