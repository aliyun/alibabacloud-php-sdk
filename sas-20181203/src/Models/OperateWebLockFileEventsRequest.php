<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class OperateWebLockFileEventsRequest extends Model
{
    /**
     * @description Specifies whether to handle all alert events that are generated for web tamper proofing. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * @example 1
     *
     * @var int
     */
    public $dealAll;

    /**
     * @description The IDs of alert events.
     *
     * @var int[]
     */
    public $eventIds;

    /**
     * @description The operation that you want to perform on the alert events. Valid values:
     *
     *   **mark_mis_info**: marks the alert events as false positives
     *   **rm_mark_mis_info**: cancels marking the alerts events as false positives
     *   **offline_handled**: marks the alert events as handled offline
     *   **whitelist**: adds the alert events to the whitelist
     *   **rm_whitelist**: cancels adding the alert events to the whitelist
     *
     * @example whitelist
     *
     * @var string
     */
    public $operationCode;
    protected $_name = [
        'dealAll'       => 'DealAll',
        'eventIds'      => 'EventIds',
        'operationCode' => 'OperationCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dealAll) {
            $res['DealAll'] = $this->dealAll;
        }
        if (null !== $this->eventIds) {
            $res['EventIds'] = $this->eventIds;
        }
        if (null !== $this->operationCode) {
            $res['OperationCode'] = $this->operationCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OperateWebLockFileEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DealAll'])) {
            $model->dealAll = $map['DealAll'];
        }
        if (isset($map['EventIds'])) {
            if (!empty($map['EventIds'])) {
                $model->eventIds = $map['EventIds'];
            }
        }
        if (isset($map['OperationCode'])) {
            $model->operationCode = $map['OperationCode'];
        }

        return $model;
    }
}
