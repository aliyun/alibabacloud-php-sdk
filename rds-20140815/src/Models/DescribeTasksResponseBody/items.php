<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeTasksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeTasksResponseBody\items\taskProgressInfo;

class items extends Model
{
    /**
     * @var taskProgressInfo[]
     */
    public $taskProgressInfo;
    protected $_name = [
        'taskProgressInfo' => 'TaskProgressInfo',
    ];

    public function validate()
    {
        if (\is_array($this->taskProgressInfo)) {
            Model::validateArray($this->taskProgressInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->taskProgressInfo) {
            if (\is_array($this->taskProgressInfo)) {
                $res['TaskProgressInfo'] = [];
                $n1 = 0;
                foreach ($this->taskProgressInfo as $item1) {
                    $res['TaskProgressInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TaskProgressInfo'])) {
            if (!empty($map['TaskProgressInfo'])) {
                $model->taskProgressInfo = [];
                $n1 = 0;
                foreach ($map['TaskProgressInfo'] as $item1) {
                    $model->taskProgressInfo[$n1] = taskProgressInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
