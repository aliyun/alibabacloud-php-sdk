<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListVpcEndpointsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $endpointBusinessStatus;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var string
     */
    public $endpointName;

    /**
     * @var string
     */
    public $endpointId;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $connectionStatus;

    /**
     * @var string
     */
    public $endpointDomain;

    /**
     * @var string
     */
    public $endpointStatus;
    protected $_name = [
        'endpointBusinessStatus' => 'endpointBusinessStatus',
        'serviceId'              => 'serviceId',
        'endpointName'           => 'endpointName',
        'endpointId'             => 'endpointId',
        'serviceName'            => 'serviceName',
        'createTime'             => 'createTime',
        'connectionStatus'       => 'connectionStatus',
        'endpointDomain'         => 'endpointDomain',
        'endpointStatus'         => 'endpointStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpointBusinessStatus) {
            $res['endpointBusinessStatus'] = $this->endpointBusinessStatus;
        }
        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
        }
        if (null !== $this->endpointName) {
            $res['endpointName'] = $this->endpointName;
        }
        if (null !== $this->endpointId) {
            $res['endpointId'] = $this->endpointId;
        }
        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->connectionStatus) {
            $res['connectionStatus'] = $this->connectionStatus;
        }
        if (null !== $this->endpointDomain) {
            $res['endpointDomain'] = $this->endpointDomain;
        }
        if (null !== $this->endpointStatus) {
            $res['endpointStatus'] = $this->endpointStatus;
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
        if (isset($map['endpointBusinessStatus'])) {
            $model->endpointBusinessStatus = $map['endpointBusinessStatus'];
        }
        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }
        if (isset($map['endpointName'])) {
            $model->endpointName = $map['endpointName'];
        }
        if (isset($map['endpointId'])) {
            $model->endpointId = $map['endpointId'];
        }
        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['connectionStatus'])) {
            $model->connectionStatus = $map['connectionStatus'];
        }
        if (isset($map['endpointDomain'])) {
            $model->endpointDomain = $map['endpointDomain'];
        }
        if (isset($map['endpointStatus'])) {
            $model->endpointStatus = $map['endpointStatus'];
        }

        return $model;
    }
}
