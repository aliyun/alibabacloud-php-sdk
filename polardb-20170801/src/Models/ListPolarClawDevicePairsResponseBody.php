<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ListPolarClawDevicePairsResponseBody\paired;
use AlibabaCloud\SDK\Polardb\V20170801\Models\ListPolarClawDevicePairsResponseBody\pending;

class ListPolarClawDevicePairsResponseBody extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var paired[]
     */
    public $paired;

    /**
     * @var pending[]
     */
    public $pending;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'code' => 'Code',
        'message' => 'Message',
        'paired' => 'Paired',
        'pending' => 'Pending',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->paired)) {
            Model::validateArray($this->paired);
        }
        if (\is_array($this->pending)) {
            Model::validateArray($this->pending);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->paired) {
            if (\is_array($this->paired)) {
                $res['Paired'] = [];
                $n1 = 0;
                foreach ($this->paired as $item1) {
                    $res['Paired'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pending) {
            if (\is_array($this->pending)) {
                $res['Pending'] = [];
                $n1 = 0;
                foreach ($this->pending as $item1) {
                    $res['Pending'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Paired'])) {
            if (!empty($map['Paired'])) {
                $model->paired = [];
                $n1 = 0;
                foreach ($map['Paired'] as $item1) {
                    $model->paired[$n1] = paired::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Pending'])) {
            if (!empty($map['Pending'])) {
                $model->pending = [];
                $n1 = 0;
                foreach ($map['Pending'] as $item1) {
                    $model->pending[$n1] = pending::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
