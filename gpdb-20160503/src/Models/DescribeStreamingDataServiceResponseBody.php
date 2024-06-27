<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DescribeStreamingDataServiceResponseBody extends Model
{
    /**
     * @description The time when the service was created.
     *
     * @example 2019-09-08T16:00:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the service was last modified.
     *
     * @example 2019-09-08T17:00:00Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @description The request ID.
     *
     * @example B4CAF581-2AC7-41AD-8940-D56DF7AADF5B
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The description of the service.
     *
     * @example test-adbpgss
     *
     * @var string
     */
    public $serviceDescription;

    /**
     * @description The service ID.
     *
     * @example 1
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description The IP address of the service.
     *
     * @example 192.168.0.1
     *
     * @var string
     */
    public $serviceIp;

    /**
     * @var bool
     */
    public $serviceManaged;

    /**
     * @description The name of the service.
     *
     * @example test-adbpgss
     *
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $serviceOwnerId;

    /**
     * @description The port number of the service.
     *
     * @example 5432
     *
     * @var int
     */
    public $servicePort;

    /**
     * @description The specifications of the service.
     *
     * @example 2
     *
     * @var string
     */
    public $serviceSpec;

    /**
     * @description The status of the service. Valid values:
     *
     *   Init
     *   Running
     *   Exception
     *   Paused
     *
     * @example Running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'createTime'         => 'CreateTime',
        'modifyTime'         => 'ModifyTime',
        'requestId'          => 'RequestId',
        'serviceDescription' => 'ServiceDescription',
        'serviceId'          => 'ServiceId',
        'serviceIp'          => 'ServiceIp',
        'serviceManaged'     => 'ServiceManaged',
        'serviceName'        => 'ServiceName',
        'serviceOwnerId'     => 'ServiceOwnerId',
        'servicePort'        => 'ServicePort',
        'serviceSpec'        => 'ServiceSpec',
        'status'             => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serviceDescription) {
            $res['ServiceDescription'] = $this->serviceDescription;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->serviceIp) {
            $res['ServiceIp'] = $this->serviceIp;
        }
        if (null !== $this->serviceManaged) {
            $res['ServiceManaged'] = $this->serviceManaged;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->serviceOwnerId) {
            $res['ServiceOwnerId'] = $this->serviceOwnerId;
        }
        if (null !== $this->servicePort) {
            $res['ServicePort'] = $this->servicePort;
        }
        if (null !== $this->serviceSpec) {
            $res['ServiceSpec'] = $this->serviceSpec;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeStreamingDataServiceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceDescription'])) {
            $model->serviceDescription = $map['ServiceDescription'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['ServiceIp'])) {
            $model->serviceIp = $map['ServiceIp'];
        }
        if (isset($map['ServiceManaged'])) {
            $model->serviceManaged = $map['ServiceManaged'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['ServiceOwnerId'])) {
            $model->serviceOwnerId = $map['ServiceOwnerId'];
        }
        if (isset($map['ServicePort'])) {
            $model->servicePort = $map['ServicePort'];
        }
        if (isset($map['ServiceSpec'])) {
            $model->serviceSpec = $map['ServiceSpec'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
