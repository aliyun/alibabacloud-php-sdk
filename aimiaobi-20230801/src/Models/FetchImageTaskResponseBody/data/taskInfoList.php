<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\FetchImageTaskResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\FetchImageTaskResponseBody\data\taskInfoList\imageList;

class taskInfoList extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var imageList[]
     */
    public $imageList;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskStatus;
    protected $_name = [
        'id' => 'Id',
        'imageList' => 'ImageList',
        'taskId' => 'TaskId',
        'taskStatus' => 'TaskStatus',
    ];

    public function validate()
    {
        if (\is_array($this->imageList)) {
            Model::validateArray($this->imageList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->imageList) {
            if (\is_array($this->imageList)) {
                $res['ImageList'] = [];
                $n1 = 0;
                foreach ($this->imageList as $item1) {
                    $res['ImageList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['ImageList'])) {
            if (!empty($map['ImageList'])) {
                $model->imageList = [];
                $n1 = 0;
                foreach ($map['ImageList'] as $item1) {
                    $model->imageList[$n1] = imageList::fromMap($item1);
                    ++$n1;
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
