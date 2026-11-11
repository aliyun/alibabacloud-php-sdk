<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListInventorySynchronizationJobsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\ListInventorySynchronizationJobsResponseBody\inventorySynchronizationJobs\result;

class inventorySynchronizationJobs extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $inventorySourceId;

    /**
     * @var string
     */
    public $inventorySynchronizationJobId;

    /**
     * @var result
     */
    public $result;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $triggerType;
    protected $_name = [
        'description' => 'Description',
        'endTime' => 'EndTime',
        'inventorySourceId' => 'InventorySourceId',
        'inventorySynchronizationJobId' => 'InventorySynchronizationJobId',
        'result' => 'Result',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'triggerType' => 'TriggerType',
    ];

    public function validate()
    {
        if (null !== $this->result) {
            $this->result->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->inventorySourceId) {
            $res['InventorySourceId'] = $this->inventorySourceId;
        }

        if (null !== $this->inventorySynchronizationJobId) {
            $res['InventorySynchronizationJobId'] = $this->inventorySynchronizationJobId;
        }

        if (null !== $this->result) {
            $res['Result'] = null !== $this->result ? $this->result->toArray($noStream) : $this->result;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->triggerType) {
            $res['TriggerType'] = $this->triggerType;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['InventorySourceId'])) {
            $model->inventorySourceId = $map['InventorySourceId'];
        }

        if (isset($map['InventorySynchronizationJobId'])) {
            $model->inventorySynchronizationJobId = $map['InventorySynchronizationJobId'];
        }

        if (isset($map['Result'])) {
            $model->result = result::fromMap($map['Result']);
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TriggerType'])) {
            $model->triggerType = $map['TriggerType'];
        }

        return $model;
    }
}
