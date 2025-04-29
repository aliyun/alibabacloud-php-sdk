<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class ApplyExternalNodeStatusUpdateShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $operationRecordsShrink;

    /**
     * @var string
     */
    public $processActionResult;
    protected $_name = [
        'nodeId' => 'node_id',
        'operationRecordsShrink' => 'operation_records',
        'processActionResult' => 'process_action_result',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $model->operationRecordsShrink = $map['operation_records'];
        }

        if (isset($map['process_action_result'])) {
            $model->processActionResult = $map['process_action_result'];
        }

        return $model;
    }
}
