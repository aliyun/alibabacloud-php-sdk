<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class ListSettledsRequest extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $applicant;

    /**
     * @var string
     */
    public $enterpriseName;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'accountId' => 'accountId',
        'applicant' => 'applicant',
        'enterpriseName' => 'enterpriseName',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }

        if (null !== $this->applicant) {
            $res['applicant'] = $this->applicant;
        }

        if (null !== $this->enterpriseName) {
            $res['enterpriseName'] = $this->enterpriseName;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }

        if (isset($map['applicant'])) {
            $model->applicant = $map['applicant'];
        }

        if (isset($map['enterpriseName'])) {
            $model->enterpriseName = $map['enterpriseName'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
