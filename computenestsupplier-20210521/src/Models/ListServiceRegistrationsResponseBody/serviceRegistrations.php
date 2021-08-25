<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceRegistrationsResponseBody;

use AlibabaCloud\Tea\Model;

class serviceRegistrations extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $registrationId;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var string
     */
    public $submitTime;
    protected $_name = [
        'status'         => 'Status',
        'registrationId' => 'RegistrationId',
        'finishTime'     => 'FinishTime',
        'comment'        => 'Comment',
        'serviceId'      => 'ServiceId',
        'submitTime'     => 'SubmitTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->registrationId) {
            $res['RegistrationId'] = $this->registrationId;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['RegistrationId'])) {
            $model->registrationId = $map['RegistrationId'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['SubmitTime'])) {
            $model->submitTime = $map['SubmitTime'];
        }

        return $model;
    }
}
