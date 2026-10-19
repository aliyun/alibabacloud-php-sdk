<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\CreateWorkflowInstanceResponseBody;

use AlibabaCloud\Dara\Model;

class currentNodes extends Model
{
    /**
     * @var string
     */
    public $handler;

    /**
     * @var string
     */
    public $handlerId;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'handler' => 'handler',
        'handlerId' => 'handlerId',
        'nodeId' => 'nodeId',
        'nodeName' => 'nodeName',
        'nodeType' => 'nodeType',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->handler) {
            $res['handler'] = $this->handler;
        }

        if (null !== $this->handlerId) {
            $res['handlerId'] = $this->handlerId;
        }

        if (null !== $this->nodeId) {
            $res['nodeId'] = $this->nodeId;
        }

        if (null !== $this->nodeName) {
            $res['nodeName'] = $this->nodeName;
        }

        if (null !== $this->nodeType) {
            $res['nodeType'] = $this->nodeType;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['handler'])) {
            $model->handler = $map['handler'];
        }

        if (isset($map['handlerId'])) {
            $model->handlerId = $map['handlerId'];
        }

        if (isset($map['nodeId'])) {
            $model->nodeId = $map['nodeId'];
        }

        if (isset($map['nodeName'])) {
            $model->nodeName = $map['nodeName'];
        }

        if (isset($map['nodeType'])) {
            $model->nodeType = $map['nodeType'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
