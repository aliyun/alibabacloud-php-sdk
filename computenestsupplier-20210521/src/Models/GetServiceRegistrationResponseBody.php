<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceRegistrationResponseBody\detail;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceRegistrationResponseBody\serviceInfo;
use AlibabaCloud\Tea\Model;

class GetServiceRegistrationResponseBody extends Model
{
    /**
     * @description Comment from reviewer.
     *
     * @example comment message
     *
     * @var string
     */
    public $comment;

    /**
     * @description The details of service audit.
     *
     * @var detail
     */
    public $detail;

    /**
     * @description Finish time.
     *
     * @example 2024-12-07T11:05:50Z
     *
     * @var string
     */
    public $finishTime;

    /**
     * @description Service registration ID.
     *
     * @example sr-1b4aabc1c9eb4109****
     *
     * @var string
     */
    public $registrationId;

    /**
     * @description The request ID.
     *
     * @example A361BA9E-xxxx-xxxx-xxxx-C26E5180456E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The service ID.
     *
     * @example service-c2d118c9193e49xxxxxx
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description The service details.
     *
     * @var serviceInfo
     */
    public $serviceInfo;

    /**
     * @description The service version.
     *
     * @example beta
     *
     * @var string
     */
    public $serviceVersion;

    /**
     * @description The status of service registration. Valid values:
     *
     *   Submitted
     *   Approved
     *   Rejected
     *   Canceled
     *   Executed
     *
     * @example Submitted
     *
     * @var string
     */
    public $status;

    /**
     * @description Submit time.
     *
     * @example 2024-12-07T11:05:50Z
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->detail) {
            $res['Detail'] = null !== $this->detail ? $this->detail->toMap() : null;
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
            $res['ServiceInfo'] = null !== $this->serviceInfo ? $this->serviceInfo->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return GetServiceRegistrationResponseBody
     */
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
