<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListOperationCheckResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListOperationCheckResponseBody\operationTaskInstanceDetails\repair;
use AlibabaCloud\Tea\Model;

class operationTaskInstanceDetails extends Model
{
    /**
     * @description Check item ID.
     *
     * @example 58
     *
     * @var int
     */
    public $checkId;

    /**
     * @description Instance ID.
     *
     * @example lb-2zefdwrre8ey8ewr0****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Region ID.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Information about the repair task.
     *
     * @var repair[]
     */
    public $repair;

    /**
     * @description The operation type of the corresponding task:
     * - **REPAIR**: Repair task
     * - **ROLLBACK**: Rollback task
     *
     * @example REPAIR
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'checkId' => 'CheckId',
        'instanceId' => 'InstanceId',
        'regionId' => 'RegionId',
        'repair' => 'Repair',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->repair) {
            $res['Repair'] = [];
            if (null !== $this->repair && \is_array($this->repair)) {
                $n = 0;
                foreach ($this->repair as $item) {
                    $res['Repair'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return operationTaskInstanceDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Repair'])) {
            if (!empty($map['Repair'])) {
                $model->repair = [];
                $n = 0;
                foreach ($map['Repair'] as $item) {
                    $model->repair[$n++] = null !== $item ? repair::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
