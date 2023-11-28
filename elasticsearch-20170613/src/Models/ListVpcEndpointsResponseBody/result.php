<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListVpcEndpointsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The status of the endpoint connection. Valid values:
     *
     *   Pending
     *   Connecting
     *   Connected
     *   Disconnecting
     *   Disconnected
     *   Deleting
     *   ServiceDeleted
     *
     * @example Disconnected
     *
     * @var string
     */
    public $connectionStatus;

    /**
     * @description The time when the endpoint was created.
     *
     * @example 2021-07-22T01:19:24Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The business status of the endpoint. Valid values:
     *
     *   Normal
     *   FinancialLocked
     *
     * @example Normal
     *
     * @var string
     */
    public $endpointBusinessStatus;

    /**
     * @description The domain name of the endpoint. The domain name is used for connection configuration.
     *
     * @example ep-bp18s6wy9420wdi4****.epsrv-bp1bz3efowa4kc0****.cn-hangzhou.privatelink.aliyuncs.com
     *
     * @var string
     */
    public $endpointDomain;

    /**
     * @description The ID of the endpoint.
     *
     * @example ep-bp1tah7zbrwmkjef****
     *
     * @var string
     */
    public $endpointId;

    /**
     * @description The name of the endpoint.
     *
     * @example test
     *
     * @var string
     */
    public $endpointName;

    /**
     * @description The status of the endpoint. Valid values:
     *
     *   Creating
     *   Active
     *   Pending
     *   Deleting
     *
     * @example Active
     *
     * @var string
     */
    public $endpointStatus;

    /**
     * @description The ID of the endpoint service with which the endpoint is associated.
     *
     * @example epsrv-bp1w0p3jdirbfmt6****
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description The name of the endpoint service with which the endpoint is associated.
     *
     * @example com.aliyuncs.privatelink.cn-hangzhou.epsrv-bp1w0p3jdirbfmt6****
     *
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'connectionStatus'       => 'connectionStatus',
        'createTime'             => 'createTime',
        'endpointBusinessStatus' => 'endpointBusinessStatus',
        'endpointDomain'         => 'endpointDomain',
        'endpointId'             => 'endpointId',
        'endpointName'           => 'endpointName',
        'endpointStatus'         => 'endpointStatus',
        'serviceId'              => 'serviceId',
        'serviceName'            => 'serviceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionStatus) {
            $res['connectionStatus'] = $this->connectionStatus;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->endpointBusinessStatus) {
            $res['endpointBusinessStatus'] = $this->endpointBusinessStatus;
        }
        if (null !== $this->endpointDomain) {
            $res['endpointDomain'] = $this->endpointDomain;
        }
        if (null !== $this->endpointId) {
            $res['endpointId'] = $this->endpointId;
        }
        if (null !== $this->endpointName) {
            $res['endpointName'] = $this->endpointName;
        }
        if (null !== $this->endpointStatus) {
            $res['endpointStatus'] = $this->endpointStatus;
        }
        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
        }
        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['connectionStatus'])) {
            $model->connectionStatus = $map['connectionStatus'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['endpointBusinessStatus'])) {
            $model->endpointBusinessStatus = $map['endpointBusinessStatus'];
        }
        if (isset($map['endpointDomain'])) {
            $model->endpointDomain = $map['endpointDomain'];
        }
        if (isset($map['endpointId'])) {
            $model->endpointId = $map['endpointId'];
        }
        if (isset($map['endpointName'])) {
            $model->endpointName = $map['endpointName'];
        }
        if (isset($map['endpointStatus'])) {
            $model->endpointStatus = $map['endpointStatus'];
        }
        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }
        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }

        return $model;
    }
}
