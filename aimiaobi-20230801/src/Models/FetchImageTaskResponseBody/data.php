<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\FetchImageTaskResponseBody;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\FetchImageTaskResponseBody\data\taskInfoList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var taskInfoList[]
     */
    public $taskInfoList;
    protected $_name = [
        'taskInfoList' => 'TaskInfoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskInfoList) {
            $res['TaskInfoList'] = [];
            if (null !== $this->taskInfoList && \is_array($this->taskInfoList)) {
                $n = 0;
                foreach ($this->taskInfoList as $item) {
                    $res['TaskInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskInfoList'])) {
            if (!empty($map['TaskInfoList'])) {
                $model->taskInfoList = [];
                $n                   = 0;
                foreach ($map['TaskInfoList'] as $item) {
                    $model->taskInfoList[$n++] = null !== $item ? taskInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
