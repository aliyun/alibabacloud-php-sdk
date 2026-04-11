<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\InstallAppResponseBody\childTaskInfo;

class InstallAppResponseBody extends Model
{
    /**
     * @var childTaskInfo[]
     */
    public $childTaskInfo;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'childTaskInfo' => 'ChildTaskInfo',
        'requestId' => 'RequestId',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        if (\is_array($this->childTaskInfo)) {
            Model::validateArray($this->childTaskInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->childTaskInfo) {
            if (\is_array($this->childTaskInfo)) {
                $res['ChildTaskInfo'] = [];
                $n1 = 0;
                foreach ($this->childTaskInfo as $item1) {
                    $res['ChildTaskInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['ChildTaskInfo'])) {
            if (!empty($map['ChildTaskInfo'])) {
                $model->childTaskInfo = [];
                $n1 = 0;
                foreach ($map['ChildTaskInfo'] as $item1) {
                    $model->childTaskInfo[$n1] = childTaskInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
