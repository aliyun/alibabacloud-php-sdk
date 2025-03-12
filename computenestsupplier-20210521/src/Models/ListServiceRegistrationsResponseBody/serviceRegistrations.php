<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceRegistrationsResponseBody;

use AlibabaCloud\Tea\Model;

class serviceRegistrations extends Model
{
    /**
     * @description Comment.
     *
     * @example some info is missing
     *
     * @var string
     */
    public $comment;

    /**
     * @description Finish time.
     *
     * @example 2021-05-23T00:00:00Z
     *
     * @var string
     */
    public $finishTime;

    /**
     * @description Registration ID.
     *
     * @example sr-001
     *
     * @var string
     */
    public $registrationId;

    /**
     * @description Service ID.
     *
     * @example service-f4c0026a254bxxxxxxxx
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description Registration status. Allowed values:
     *
     * - Executed: Executed.
     * @example Rejected
     *
     * @var string
     */
    public $status;

    /**
     * @description Submit time.
     *
     * @example 2021-05-22T00:00:00Z
     *
     * @var string
     */
    public $submitTime;
    protected $_name = [
        'comment'        => 'Comment',
        'finishTime'     => 'FinishTime',
        'registrationId' => 'RegistrationId',
        'serviceId'      => 'ServiceId',
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
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->registrationId) {
            $res['RegistrationId'] = $this->registrationId;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
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
     * @return serviceRegistrations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['RegistrationId'])) {
            $model->registrationId = $map['RegistrationId'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
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
