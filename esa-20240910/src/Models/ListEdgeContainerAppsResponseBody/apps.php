<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListEdgeContainerAppsResponseBody;

use AlibabaCloud\SDK\ESA\V20240910\Models\ListEdgeContainerAppsResponseBody\apps\healthCheck;
use AlibabaCloud\Tea\Model;

class apps extends Model
{
    /**
     * @description The application ID.
     *
     * @example app-88068867578379****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The time when the version was created.
     *
     * @example 2022-12-01T16:16:27.418298794+08:00
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The domain name associated with the application.
     *
     * @example test.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The type of the gateway. Valid values:
     *
     *   l7: Layer 7 gateway.
     *   l4: Layer 4 gateway.
     *
     * @example l7
     *
     * @var string
     */
    public $gatewayType;

    /**
     * @description The information about health checks.
     *
     * @var healthCheck
     */
    public $healthCheck;

    /**
     * @description The application name.
     *
     * @example app-test
     *
     * @var string
     */
    public $name;

    /**
     * @description The progress of the application creation task in percentage.
     *
     * @example 100
     *
     * @var int
     */
    public $percentage;

    /**
     * @description Indicates whether QUIC is enabled.
     *
     * @example false
     *
     * @var string
     */
    public $quicCid;

    /**
     * @description The remarks.
     *
     * @example test app
     *
     * @var string
     */
    public $remarks;

    /**
     * @description The server port. Valid values: 1 to 65535.
     *
     * @example 80
     *
     * @var int
     */
    public $servicePort;

    /**
     * @description The status of the application. Valid values:
     *
     *   creating: The application is being created.
     *   failed: The application failed to be created.
     *   created: The application is created.
     *
     * @example created
     *
     * @var string
     */
    public $status;

    /**
     * @description The backend port, which is also the service port of the application. Valid values: 1 to 65535.
     *
     * @example 80
     *
     * @var int
     */
    public $targetPort;

    /**
     * @description The time when the application was last modified. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ss format. The time is displayed in UTC.
     *
     * @example 2023-11-15T12:11:02Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description The number of versions of the application.
     *
     * @example 10
     *
     * @var int
     */
    public $versionCount;
    protected $_name = [
        'appId' => 'AppId',
        'createTime' => 'CreateTime',
        'domainName' => 'DomainName',
        'gatewayType' => 'GatewayType',
        'healthCheck' => 'HealthCheck',
        'name' => 'Name',
        'percentage' => 'Percentage',
        'quicCid' => 'QuicCid',
        'remarks' => 'Remarks',
        'servicePort' => 'ServicePort',
        'status' => 'Status',
        'targetPort' => 'TargetPort',
        'updateTime' => 'UpdateTime',
        'versionCount' => 'VersionCount',
    ];

    public function validate() {}

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

    /**
     * @param array $map
     *
     * @return apps
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
