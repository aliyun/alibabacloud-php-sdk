<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyExternalNodeStatusUpdateRequest\operationRecords;

class ApplyExternalNodeStatusUpdateRequest extends Model
{
    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var operationRecords[]
     */
    public $operationRecords;

    /**
     * @var string
     */
    public $processActionResult;
    protected $_name = [
        'nodeId' => 'node_id',
        'operationRecords' => 'operation_records',
        'processActionResult' => 'process_action_result',
    ];

    public function validate()
    {
        if (\is_array($this->operationRecords)) {
            Model::validateArray($this->operationRecords);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeId) {
            $res['node_id'] = $this->nodeId;
        }

        if (null !== $this->operationRecords) {
            if (\is_array($this->operationRecords)) {
                $res['operation_records'] = [];
                $n1 = 0;
                foreach ($this->operationRecords as $item1) {
                    $res['operation_records'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->processActionResult) {
            $res['process_action_result'] = $this->processActionResult;
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
        if (isset($map['node_id'])) {
            $model->nodeId = $map['node_id'];
        }

        if (isset($map['operation_records'])) {
            if (!empty($map['operation_records'])) {
                $model->operationRecords = [];
                $n1 = 0;
                foreach ($map['operation_records'] as $item1) {
                    $model->operationRecords[$n1++] = operationRecords::fromMap($item1);
                }
            }
        }

        if (isset($map['process_action_result'])) {
            $model->processActionResult = $map['process_action_result'];
        }

        return $model;
    }
}
