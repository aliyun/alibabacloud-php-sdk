<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyExternalNodeStatusUpdateRequest\operationRecords;
use AlibabaCloud\Tea\Model;

class ApplyExternalNodeStatusUpdateRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 123
     *
     * @var string
     */
    public $nodeId;

    /**
     * @var operationRecords[]
     */
    public $operationRecords;

    /**
     * @description This parameter is required.
     *
     * @example PROCESS_AGREE
     *
     * @var string
     */
    public $processActionResult;
    protected $_name = [
        'nodeId'              => 'node_id',
        'operationRecords'    => 'operation_records',
        'processActionResult' => 'process_action_result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeId) {
            $res['node_id'] = $this->nodeId;
        }
        if (null !== $this->operationRecords) {
            $res['operation_records'] = [];
            if (null !== $this->operationRecords && \is_array($this->operationRecords)) {
                $n = 0;
                foreach ($this->operationRecords as $item) {
                    $res['operation_records'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->processActionResult) {
            $res['process_action_result'] = $this->processActionResult;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyExternalNodeStatusUpdateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['node_id'])) {
            $model->nodeId = $map['node_id'];
        }
        if (isset($map['operation_records'])) {
            if (!empty($map['operation_records'])) {
                $model->operationRecords = [];
                $n                       = 0;
                foreach ($map['operation_records'] as $item) {
                    $model->operationRecords[$n++] = null !== $item ? operationRecords::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['process_action_result'])) {
            $model->processActionResult = $map['process_action_result'];
        }

        return $model;
    }
}
