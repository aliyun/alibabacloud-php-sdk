<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;

class CloneServiceResponseBody extends Model
{
    /**
     * @var string
     */
    public $internetEndpoint;

    /**
     * @var string
     */
    public $intranetEndpoint;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'internetEndpoint' => 'InternetEndpoint',
        'intranetEndpoint' => 'IntranetEndpoint',
        'requestId' => 'RequestId',
        'serviceId' => 'ServiceId',
        'serviceName' => 'ServiceName',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
