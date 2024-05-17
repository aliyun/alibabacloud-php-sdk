<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListStreamingDataServicesResponseBody;

use AlibabaCloud\Tea\Model;

class serviceItems extends Model
{
    /**
     * @example 2019-09-08T16:00:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2019-09-08T17:00:00Z
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @example test-adbpgss
     *
     * @var string
     */
    public $serviceDescription;

    /**
     * @example 1
     *
     * @var string
     */
    public $serviceId;

    /**
     * @example 192.168.0.1
     *
     * @var string
     */
    public $serviceIp;

    /**
     * @example test-adbpgss
     *
     * @var string
     */
    public $serviceName;

    /**
     * @example 5432
     *
     * @var string
     */
    public $servicePort;

    /**
     * @example 2
     *
     * @var string
     */
    public $serviceSpec;

    /**
     * @example adbpgss
     *
     * @var string
     */
    public $serviceType;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'createTime'         => 'CreateTime',
        'modifyTime'         => 'ModifyTime',
        'serviceDescription' => 'ServiceDescription',
        'serviceId'          => 'ServiceId',
        'serviceIp'          => 'ServiceIp',
        'serviceName'        => 'ServiceName',
        'servicePort'        => 'ServicePort',
        'serviceSpec'        => 'ServiceSpec',
        'serviceType'        => 'ServiceType',
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
        if (null !== $this->serviceDescription) {
            $res['ServiceDescription'] = $this->serviceDescription;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->serviceIp) {
            $res['ServiceIp'] = $this->serviceIp;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->servicePort) {
            $res['ServicePort'] = $this->servicePort;
        }
        if (null !== $this->serviceSpec) {
            $res['ServiceSpec'] = $this->serviceSpec;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceItems
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
        if (isset($map['ServiceDescription'])) {
            $model->serviceDescription = $map['ServiceDescription'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['ServiceIp'])) {
            $model->serviceIp = $map['ServiceIp'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['ServicePort'])) {
            $model->servicePort = $map['ServicePort'];
        }
        if (isset($map['ServiceSpec'])) {
            $model->serviceSpec = $map['ServiceSpec'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
