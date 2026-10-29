<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Dara\Model;

class CreateYaoChiAgentConfirmResponseBody extends Model
{
    /**
     * @var bool
     */
    public $approved;

    /**
     * @var string
     */
    public $confirmationId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $toolArgsReceived;
    protected $_name = [
        'approved' => 'Approved',
        'confirmationId' => 'ConfirmationId',
        'requestId' => 'RequestId',
        'status' => 'Status',
        'toolArgsReceived' => 'ToolArgsReceived',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approved) {
            $res['Approved'] = $this->approved;
        }

        if (null !== $this->confirmationId) {
            $res['ConfirmationId'] = $this->confirmationId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->toolArgsReceived) {
            $res['ToolArgsReceived'] = $this->toolArgsReceived;
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
        if (isset($map['Approved'])) {
            $model->approved = $map['Approved'];
        }

        if (isset($map['ConfirmationId'])) {
            $model->confirmationId = $map['ConfirmationId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['ToolArgsReceived'])) {
            $model->toolArgsReceived = $map['ToolArgsReceived'];
        }

        return $model;
    }
}
