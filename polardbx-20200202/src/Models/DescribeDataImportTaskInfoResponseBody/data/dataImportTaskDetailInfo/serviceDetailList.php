<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDataImportTaskInfoResponseBody\data\dataImportTaskDetailInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeDataImportTaskInfoResponseBody\data\dataImportTaskDetailInfo\serviceDetailList\taskDetailList;

class serviceDetailList extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $status;

    /**
     * @var taskDetailList[]
     */
    public $taskDetailList;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'id' => 'Id',
        'status' => 'Status',
        'taskDetailList' => 'TaskDetailList',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->taskDetailList)) {
            Model::validateArray($this->taskDetailList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->taskDetailList) {
            if (\is_array($this->taskDetailList)) {
                $res['TaskDetailList'] = [];
                $n1 = 0;
                foreach ($this->taskDetailList as $item1) {
                    $res['TaskDetailList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TaskDetailList'])) {
            if (!empty($map['TaskDetailList'])) {
                $model->taskDetailList = [];
                $n1 = 0;
                foreach ($map['TaskDetailList'] as $item1) {
                    $model->taskDetailList[$n1] = taskDetailList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
