<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\GetLifecycleResponseBody\lifecycle;

class GetLifecycleResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var lifecycle[][]
     */
    public $lifecycle;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'code' => 'Code',
        'lifecycle' => 'Lifecycle',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->lifecycle)) {
            Model::validateArray($this->lifecycle);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->lifecycle) {
            if (\is_array($this->lifecycle)) {
                $res['Lifecycle'] = [];
                $n1 = 0;
                foreach ($this->lifecycle as $item1) {
                    if (\is_array($item1)) {
                        $res['Lifecycle'][$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['Lifecycle'][$n1][$n2] = null !== $item2 ? $item2->toArray($noStream) : $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Lifecycle'])) {
            if (!empty($map['Lifecycle'])) {
                $model->lifecycle = [];
                $n1 = 0;
                foreach ($map['Lifecycle'] as $item1) {
                    if (!empty($item1)) {
                        $model->lifecycle[$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->lifecycle[$n1][$n2] = lifecycle::fromMap($item2);
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
