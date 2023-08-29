<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeMiniTasksResponseBody;

use AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeMiniTasksResponseBody\listMiniTaskResult\miniTaskList;
use AlibabaCloud\Tea\Model;

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
        'resultMsg'    => 'ResultMsg',
        'success'      => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->miniTaskList) {
            $res['MiniTaskList'] = [];
            if (null !== $this->miniTaskList && \is_array($this->miniTaskList)) {
                $n = 0;
                foreach ($this->miniTaskList as $item) {
                    $res['MiniTaskList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return listMiniTaskResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MiniTaskList'])) {
            if (!empty($map['MiniTaskList'])) {
                $model->miniTaskList = [];
                $n                   = 0;
                foreach ($map['MiniTaskList'] as $item) {
                    $model->miniTaskList[$n++] = null !== $item ? miniTaskList::fromMap($item) : $item;
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
