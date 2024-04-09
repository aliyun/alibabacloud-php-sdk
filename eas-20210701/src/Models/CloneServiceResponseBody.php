<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class CloneServiceResponseBody extends Model
{
    /**
     * @example http://10123*****.cn-shanghai.aliyuncs.com/api/predict/echo
     *
     * @var string
     */
    public $internetEndpoint;

    /**
     * @example http://10123*****.vpc.cn-shanghai.aliyuncs.com/api/predict/echo
     *
     * @var string
     */
    public $intranetEndpoint;

    /**
     * @description Id of the request
     *
     * @example 40325405-579C-4D82****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example eas-m-r9knx7n9guf2p*****
     *
     * @var string
     */
    public $serviceId;

    /**
     * @example foo
     *
     * @var string
     */
    public $serviceName;

    /**
     * @example Creating
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'internetEndpoint' => 'InternetEndpoint',
        'intranetEndpoint' => 'IntranetEndpoint',
        'requestId'        => 'RequestId',
        'serviceId'        => 'ServiceId',
        'serviceName'      => 'ServiceName',
        'status'           => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->internetEndpoint) {
            $res['InternetEndpoint'] = $this->internetEndpoint;
        }
        if (null !== $this->intranetEndpoint) {
            $res['IntranetEndpoint'] = $this->intranetEndpoint;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CloneServiceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InternetEndpoint'])) {
            $model->internetEndpoint = $map['InternetEndpoint'];
        }
        if (isset($map['IntranetEndpoint'])) {
            $model->intranetEndpoint = $map['IntranetEndpoint'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
