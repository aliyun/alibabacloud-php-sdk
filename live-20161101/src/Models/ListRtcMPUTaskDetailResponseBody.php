<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\ListRtcMPUTaskDetailResponseBody\MPUTasks;

class ListRtcMPUTaskDetailResponseBody extends Model
{
    /**
     * @var MPUTasks[]
     */
    public $MPUTasks;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'MPUTasks' => 'MPUTasks',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->MPUTasks)) {
            Model::validateArray($this->MPUTasks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->MPUTasks) {
            if (\is_array($this->MPUTasks)) {
                $res['MPUTasks'] = [];
                $n1 = 0;
                foreach ($this->MPUTasks as $item1) {
                    $res['MPUTasks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MPUTasks'])) {
            if (!empty($map['MPUTasks'])) {
                $model->MPUTasks = [];
                $n1 = 0;
                foreach ($map['MPUTasks'] as $item1) {
                    $model->MPUTasks[$n1] = MPUTasks::fromMap($item1);
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
