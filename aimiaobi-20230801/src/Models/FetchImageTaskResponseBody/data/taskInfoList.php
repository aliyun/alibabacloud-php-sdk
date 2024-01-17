<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\FetchImageTaskResponseBody\data;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\FetchImageTaskResponseBody\data\taskInfoList\imageList;
use AlibabaCloud\Tea\Model;

class taskInfoList extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @var imageList[]
     */
    public $imageList;

    /**
     * @example net-7eb32699000d4193a3c59fc64ae1e55f
     *
     * @var string
     */
    public $taskId;

    /**
     * @example SUCCESSED
     *
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'id'         => 'Id',
        'imageList'  => 'ImageList',
        'taskId'     => 'TaskId',
        'taskStatus' => 'TaskStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->imageList) {
            $res['ImageList'] = [];
            if (null !== $this->imageList && \is_array($this->imageList)) {
                $n = 0;
                foreach ($this->imageList as $item) {
                    $res['ImageList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ImageList'])) {
            if (!empty($map['ImageList'])) {
                $model->imageList = [];
                $n                = 0;
                foreach ($map['ImageList'] as $item) {
                    $model->imageList[$n++] = null !== $item ? imageList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        return $model;
    }
}
