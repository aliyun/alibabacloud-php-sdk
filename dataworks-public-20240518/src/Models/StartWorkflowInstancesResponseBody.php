<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class StartWorkflowInstancesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var SuccessInfoValue[]
     */
    public $successInfo;
    protected $_name = [
        'requestId'   => 'RequestId',
        'successInfo' => 'SuccessInfo',
    ];

    public function validate()
    {
        if (\is_array($this->successInfo)) {
            Model::validateArray($this->successInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->successInfo) {
            if (\is_array($this->successInfo)) {
                $res['SuccessInfo'] = [];
                foreach ($this->successInfo as $key1 => $value1) {
                    $res['SuccessInfo'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SuccessInfo'])) {
            if (!empty($map['SuccessInfo'])) {
                $model->successInfo = [];
                foreach ($map['SuccessInfo'] as $key1 => $value1) {
                    $model->successInfo[$key1] = SuccessInfoValue::fromMap($value1);
                }
            }
        }

        return $model;
    }
}
