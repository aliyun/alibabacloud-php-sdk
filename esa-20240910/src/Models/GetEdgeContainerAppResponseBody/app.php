<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerAppResponseBody;

use AlibabaCloud\SDK\ESA\V20240910\Models\GetEdgeContainerAppResponseBody\app\healthCheck;
use AlibabaCloud\Tea\Model;

class app extends Model
{
    /**
     * @example app-88068867578379****
     *
     * @var string
     */
    public $appId;

    /**
     * @example 2023-07-25T05:58:05Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example www.1feel.cn
     *
     * @var string
     */
    public $domainName;

    /**
     * @example l7
     *
     * @var string
     */
    public $gatewayType;

    /**
     * @var healthCheck
     */
    public $healthCheck;

    /**
     * @example test-app1
     *
     * @var string
     */
    public $name;

    /**
     * @example false
     *
     * @var string
     */
    public $quicCid;

    /**
     * @example test app
     *
     * @var string
     */
    public $remarks;

    /**
     * @example 80
     *
     * @var int
     */
    public $servicePort;

    /**
     * @example created
     *
     * @var string
     */
    public $status;

    /**
     * @example 80
     *
     * @var int
     */
    public $targetPort;

    /**
     * @example 2023-03-26T02:35:58Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example 1
     *
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
    }

    public function toMap()
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
            $res['HealthCheck'] = null !== $this->healthCheck ? $this->healthCheck->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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

    /**
     * @param array $map
     *
     * @return app
     */
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
