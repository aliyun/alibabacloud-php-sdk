<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBLogFilesResponseBody\switchListItems;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBLogFilesResponseBody\switchListItems\switchLogItems\switchStepItems;

class switchLogItems extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $dstDbType;

    /**
     * @var string
     */
    public $eventFinishTime;

    /**
     * @var string
     */
    public $eventStartTime;

    /**
     * @var string
     */
    public $simulateListId;

    /**
     * @var string
     */
    public $simulateLogId;

    /**
     * @var string
     */
    public $simulateStatus;

    /**
     * @var string
     */
    public $srcDbType;

    /**
     * @var switchStepItems[]
     */
    public $switchStepItems;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'dstDbType' => 'DstDbType',
        'eventFinishTime' => 'EventFinishTime',
        'eventStartTime' => 'EventStartTime',
        'simulateListId' => 'SimulateListId',
        'simulateLogId' => 'SimulateLogId',
        'simulateStatus' => 'SimulateStatus',
        'srcDbType' => 'SrcDbType',
        'switchStepItems' => 'SwitchStepItems',
    ];

    public function validate()
    {
        if (\is_array($this->switchStepItems)) {
            Model::validateArray($this->switchStepItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->dstDbType) {
            $res['DstDbType'] = $this->dstDbType;
        }

        if (null !== $this->eventFinishTime) {
            $res['EventFinishTime'] = $this->eventFinishTime;
        }

        if (null !== $this->eventStartTime) {
            $res['EventStartTime'] = $this->eventStartTime;
        }

        if (null !== $this->simulateListId) {
            $res['SimulateListId'] = $this->simulateListId;
        }

        if (null !== $this->simulateLogId) {
            $res['SimulateLogId'] = $this->simulateLogId;
        }

        if (null !== $this->simulateStatus) {
            $res['SimulateStatus'] = $this->simulateStatus;
        }

        if (null !== $this->srcDbType) {
            $res['SrcDbType'] = $this->srcDbType;
        }

        if (null !== $this->switchStepItems) {
            if (\is_array($this->switchStepItems)) {
                $res['SwitchStepItems'] = [];
                $n1 = 0;
                foreach ($this->switchStepItems as $item1) {
                    $res['SwitchStepItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['DstDbType'])) {
            $model->dstDbType = $map['DstDbType'];
        }

        if (isset($map['EventFinishTime'])) {
            $model->eventFinishTime = $map['EventFinishTime'];
        }

        if (isset($map['EventStartTime'])) {
            $model->eventStartTime = $map['EventStartTime'];
        }

        if (isset($map['SimulateListId'])) {
            $model->simulateListId = $map['SimulateListId'];
        }

        if (isset($map['SimulateLogId'])) {
            $model->simulateLogId = $map['SimulateLogId'];
        }

        if (isset($map['SimulateStatus'])) {
            $model->simulateStatus = $map['SimulateStatus'];
        }

        if (isset($map['SrcDbType'])) {
            $model->srcDbType = $map['SrcDbType'];
        }

        if (isset($map['SwitchStepItems'])) {
            if (!empty($map['SwitchStepItems'])) {
                $model->switchStepItems = [];
                $n1 = 0;
                foreach ($map['SwitchStepItems'] as $item1) {
                    $model->switchStepItems[$n1] = switchStepItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
