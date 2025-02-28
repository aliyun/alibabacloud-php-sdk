<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceRegistrationResponseBody\detail;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceRegistrationResponseBody\serviceInfo;

class GetServiceRegistrationResponseBody extends Model
{
    /**
     * @var string
     */
    public $comment;
    /**
     * @var detail
     */
    public $detail;
    /**
     * @var string
     */
    public $finishTime;
    /**
     * @var string
     */
    public $registrationId;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $serviceId;
    /**
     * @var serviceInfo
     */
    public $serviceInfo;
    /**
     * @var string
     */
    public $serviceVersion;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $submitTime;
    protected $_name = [
        'comment'        => 'Comment',
        'detail'         => 'Detail',
        'finishTime'     => 'FinishTime',
        'registrationId' => 'RegistrationId',
        'requestId'      => 'RequestId',
        'serviceId'      => 'ServiceId',
        'serviceInfo'    => 'ServiceInfo',
        'serviceVersion' => 'ServiceVersion',
        'status'         => 'Status',
        'submitTime'     => 'SubmitTime',
    ];

    public function validate()
    {
        if (null !== $this->detail) {
            $this->detail->validate();
        }
        if (null !== $this->serviceInfo) {
            $this->serviceInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->detail) {
            $res['Detail'] = null !== $this->detail ? $this->detail->toArray($noStream) : $this->detail;
        }

        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }

        if (null !== $this->registrationId) {
            $res['RegistrationId'] = $this->registrationId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        if (null !== $this->serviceInfo) {
            $res['ServiceInfo'] = null !== $this->serviceInfo ? $this->serviceInfo->toArray($noStream) : $this->serviceInfo;
        }

        if (null !== $this->serviceVersion) {
            $res['ServiceVersion'] = $this->serviceVersion;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->submitTime) {
            $res['SubmitTime'] = $this->submitTime;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['Detail'])) {
            $model->detail = detail::fromMap($map['Detail']);
        }

        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }

        if (isset($map['RegistrationId'])) {
            $model->registrationId = $map['RegistrationId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        if (isset($map['ServiceInfo'])) {
            $model->serviceInfo = serviceInfo::fromMap($map['ServiceInfo']);
        }

        if (isset($map['ServiceVersion'])) {
            $model->serviceVersion = $map['ServiceVersion'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubmitTime'])) {
            $model->submitTime = $map['SubmitTime'];
        }

        return $model;
    }
}
