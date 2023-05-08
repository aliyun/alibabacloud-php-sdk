<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class OperateWebLockFileEventsRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $dealAll;

    /**
     * @var int[]
     */
    public $eventIds;

    /**
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
