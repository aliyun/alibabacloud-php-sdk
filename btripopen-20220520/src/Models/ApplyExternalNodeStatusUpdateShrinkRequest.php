<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class ApplyExternalNodeStatusUpdateShrinkRequest extends Model
{
    /**
     * @example 123
     *
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $operationRecordsShrink;

    /**
     * @example PROCESS_AGREE
     *
     * @var string
     */
    public $processActionResult;
    protected $_name = [
        'nodeId'                 => 'node_id',
        'operationRecordsShrink' => 'operation_records',
        'processActionResult'    => 'process_action_result',
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
        if (null !== $this->operationRecordsShrink) {
            $res['operation_records'] = $this->operationRecordsShrink;
        }
        if (null !== $this->processActionResult) {
            $res['process_action_result'] = $this->processActionResult;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyExternalNodeStatusUpdateShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['node_id'])) {
            $model->nodeId = $map['node_id'];
        }
        if (isset($map['operation_records'])) {
            $model->operationRecordsShrink = $map['operation_records'];
        }
        if (isset($map['process_action_result'])) {
            $model->processActionResult = $map['process_action_result'];
        }

        return $model;
    }
}
