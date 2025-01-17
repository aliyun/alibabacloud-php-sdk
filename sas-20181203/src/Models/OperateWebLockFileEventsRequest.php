<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class OperateWebLockFileEventsRequest extends Model
{
    /**
     * @var int
     */
    public $dealAll;
    /**
     * @var int[]
     */
    public $eventIds;
    /**
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
        if (\is_array($this->eventIds)) {
            Model::validateArray($this->eventIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dealAll) {
            $res['DealAll'] = $this->dealAll;
        }

        if (null !== $this->eventIds) {
            if (\is_array($this->eventIds)) {
                $res['EventIds'] = [];
                $n1              = 0;
                foreach ($this->eventIds as $item1) {
                    $res['EventIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->operationCode) {
            $res['OperationCode'] = $this->operationCode;
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
        if (isset($map['DealAll'])) {
            $model->dealAll = $map['DealAll'];
        }

        if (isset($map['EventIds'])) {
            if (!empty($map['EventIds'])) {
                $model->eventIds = [];
                $n1              = 0;
                foreach ($map['EventIds'] as $item1) {
                    $model->eventIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['OperationCode'])) {
            $model->operationCode = $map['OperationCode'];
        }

        return $model;
    }
}
