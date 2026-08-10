<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;

class UpdateAiAppScanStatusResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $failedAppIds;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $successAppIds;
    protected $_name = [
        'failedAppIds' => 'FailedAppIds',
        'requestId' => 'RequestId',
        'status' => 'Status',
        'successAppIds' => 'SuccessAppIds',
    ];

    public function validate()
    {
        if (\is_array($this->failedAppIds)) {
            Model::validateArray($this->failedAppIds);
        }
        if (\is_array($this->successAppIds)) {
            Model::validateArray($this->successAppIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedAppIds) {
            if (\is_array($this->failedAppIds)) {
                $res['FailedAppIds'] = [];
                $n1 = 0;
                foreach ($this->failedAppIds as $item1) {
                    $res['FailedAppIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->successAppIds) {
            if (\is_array($this->successAppIds)) {
                $res['SuccessAppIds'] = [];
                $n1 = 0;
                foreach ($this->successAppIds as $item1) {
                    $res['SuccessAppIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['FailedAppIds'])) {
            if (!empty($map['FailedAppIds'])) {
                $model->failedAppIds = [];
                $n1 = 0;
                foreach ($map['FailedAppIds'] as $item1) {
                    $model->failedAppIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SuccessAppIds'])) {
            if (!empty($map['SuccessAppIds'])) {
                $model->successAppIds = [];
                $n1 = 0;
                foreach ($map['SuccessAppIds'] as $item1) {
                    $model->successAppIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
