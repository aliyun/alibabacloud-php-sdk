<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetAutoIncrementUsageStatisticResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetAutoIncrementUsageStatisticResponseBody\data\autoIncrementUsageList;

class data extends Model
{
    /**
     * @var autoIncrementUsageList[]
     */
    public $autoIncrementUsageList;

    /**
     * @var string
     */
    public $errorInfo;

    /**
     * @var bool
     */
    public $finish;

    /**
     * @var string
     */
    public $taskStatus;

    /**
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'autoIncrementUsageList' => 'AutoIncrementUsageList',
        'errorInfo' => 'ErrorInfo',
        'finish' => 'Finish',
        'taskStatus' => 'TaskStatus',
        'timestamp' => 'Timestamp',
    ];

    public function validate()
    {
        if (\is_array($this->autoIncrementUsageList)) {
            Model::validateArray($this->autoIncrementUsageList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoIncrementUsageList) {
            if (\is_array($this->autoIncrementUsageList)) {
                $res['AutoIncrementUsageList'] = [];
                $n1 = 0;
                foreach ($this->autoIncrementUsageList as $item1) {
                    $res['AutoIncrementUsageList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->errorInfo) {
            $res['ErrorInfo'] = $this->errorInfo;
        }

        if (null !== $this->finish) {
            $res['Finish'] = $this->finish;
        }

        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
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
        if (isset($map['AutoIncrementUsageList'])) {
            if (!empty($map['AutoIncrementUsageList'])) {
                $model->autoIncrementUsageList = [];
                $n1 = 0;
                foreach ($map['AutoIncrementUsageList'] as $item1) {
                    $model->autoIncrementUsageList[$n1++] = autoIncrementUsageList::fromMap($item1);
                }
            }
        }

        if (isset($map['ErrorInfo'])) {
            $model->errorInfo = $map['ErrorInfo'];
        }

        if (isset($map['Finish'])) {
            $model->finish = $map['Finish'];
        }

        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
