<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeSlinkTaskInfoResponseBody\data\dataImportTaskDetailInfo;

use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeSlinkTaskInfoResponseBody\data\dataImportTaskDetailInfo\serviceDetailList\taskDetailList;
use AlibabaCloud\Tea\Model;

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
        'id'             => 'Id',
        'status'         => 'Status',
        'taskDetailList' => 'TaskDetailList',
        'type'           => 'Type',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskDetailList) {
            $res['TaskDetailList'] = [];
            if (null !== $this->taskDetailList && \is_array($this->taskDetailList)) {
                $n = 0;
                foreach ($this->taskDetailList as $item) {
                    $res['TaskDetailList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceDetailList
     */
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
                $n                     = 0;
                foreach ($map['TaskDetailList'] as $item) {
                    $model->taskDetailList[$n++] = null !== $item ? taskDetailList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
