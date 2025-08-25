<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20200710\Models\ListMcubeMiniTasksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\ListMcubeMiniTasksResponseBody\listMiniTaskResult\miniTaskList;

class listMiniTaskResult extends Model
{
    /**
     * @var miniTaskList[]
     */
    public $miniTaskList;

    /**
     * @var string
     */
    public $resultMsg;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'miniTaskList' => 'MiniTaskList',
        'resultMsg' => 'ResultMsg',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->miniTaskList)) {
            Model::validateArray($this->miniTaskList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->miniTaskList) {
            if (\is_array($this->miniTaskList)) {
                $res['MiniTaskList'] = [];
                $n1 = 0;
                foreach ($this->miniTaskList as $item1) {
                    $res['MiniTaskList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resultMsg) {
            $res['ResultMsg'] = $this->resultMsg;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['MiniTaskList'])) {
            if (!empty($map['MiniTaskList'])) {
                $model->miniTaskList = [];
                $n1 = 0;
                foreach ($map['MiniTaskList'] as $item1) {
                    $model->miniTaskList[$n1] = miniTaskList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ResultMsg'])) {
            $model->resultMsg = $map['ResultMsg'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
