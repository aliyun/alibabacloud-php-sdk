<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudListTaskFileResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudListTaskFileResponseBody\data\taskFileList;

class data extends Model
{
    /**
     * @var taskFileList[]
     */
    public $taskFileList;

    /**
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'taskFileList' => 'TaskFileList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->taskFileList)) {
            Model::validateArray($this->taskFileList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->taskFileList) {
            if (\is_array($this->taskFileList)) {
                $res['TaskFileList'] = [];
                $n1 = 0;
                foreach ($this->taskFileList as $item1) {
                    $res['TaskFileList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['TaskFileList'])) {
            if (!empty($map['TaskFileList'])) {
                $model->taskFileList = [];
                $n1 = 0;
                foreach ($map['TaskFileList'] as $item1) {
                    $model->taskFileList[$n1] = taskFileList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
