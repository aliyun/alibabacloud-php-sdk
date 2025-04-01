<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServiceRegistrationsResponseBody;

use AlibabaCloud\Dara\Model;

class serviceRegistrations extends Model
{
    /**
     * @var string
     */
    public $comment;

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
    public $serviceId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $submitTime;
    protected $_name = [
        'comment' => 'Comment',
        'finishTime' => 'FinishTime',
        'registrationId' => 'RegistrationId',
        'serviceId' => 'ServiceId',
        'status' => 'Status',
        'submitTime' => 'SubmitTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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
