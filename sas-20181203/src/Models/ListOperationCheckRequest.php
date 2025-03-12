<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListOperationCheckRequest\operationTaskInstances;
use AlibabaCloud\Tea\Model;

class ListOperationCheckRequest extends Model
{
    /**
     * @description Check item ID.
     * > Obtain this parameter by calling the [ListCheckResult](~~ListCheckResult~~) interface.
     * @example 23
     *
     * @var int
     */
    public $checkId;

    /**
     * @description Timestamp (in milliseconds) of the end time of the queried task.
     *
     * @example 1719923175001
     *
     * @var int
     */
    public $endTime;

    /**
     * @description Language type for request and response messages, default value is zh. Values:
     * - **zh**: Chinese
     * - **en**: English
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description Information about the operated instances.
     *
     * This parameter is required.
     * @var operationTaskInstances[]
     */
    public $operationTaskInstances;

    /**
     * @description Timestamp (in milliseconds) of the start time of the queried task.
     *
     * @example 1719923175000
     *
     * @var int
     */
    public $startTime;

    /**
     * @description Task type corresponding to the task:
     * - **REPAIR**: Repair task
     * - **ROLLBACK**: Rollback task
     *
     * This parameter is required.
     * @example REPAIR
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'checkId'                => 'CheckId',
        'endTime'                => 'EndTime',
        'lang'                   => 'Lang',
        'operationTaskInstances' => 'OperationTaskInstances',
        'startTime'              => 'StartTime',
        'type'                   => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->operationTaskInstances) {
            $res['OperationTaskInstances'] = [];
            if (null !== $this->operationTaskInstances && \is_array($this->operationTaskInstances)) {
                $n = 0;
                foreach ($this->operationTaskInstances as $item) {
                    $res['OperationTaskInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOperationCheckRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['OperationTaskInstances'])) {
            if (!empty($map['OperationTaskInstances'])) {
                $model->operationTaskInstances = [];
                $n                             = 0;
                foreach ($map['OperationTaskInstances'] as $item) {
                    $model->operationTaskInstances[$n++] = null !== $item ? operationTaskInstances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
