<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateMcpResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $appliedRevision;

    /**
     * @var string
     */
    public $mcpServerId;

    /**
     * @var string
     */
    public $operationTaskId;

    /**
     * @var int
     */
    public $revision;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'appliedRevision' => 'appliedRevision',
        'mcpServerId' => 'mcpServerId',
        'operationTaskId' => 'operationTaskId',
        'revision' => 'revision',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appliedRevision) {
            $res['appliedRevision'] = $this->appliedRevision;
        }

        if (null !== $this->mcpServerId) {
            $res['mcpServerId'] = $this->mcpServerId;
        }

        if (null !== $this->operationTaskId) {
            $res['operationTaskId'] = $this->operationTaskId;
        }

        if (null !== $this->revision) {
            $res['revision'] = $this->revision;
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
        if (isset($map['appliedRevision'])) {
            $model->appliedRevision = $map['appliedRevision'];
        }

        if (isset($map['mcpServerId'])) {
            $model->mcpServerId = $map['mcpServerId'];
        }

        if (isset($map['operationTaskId'])) {
            $model->operationTaskId = $map['operationTaskId'];
        }

        if (isset($map['revision'])) {
            $model->revision = $map['revision'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
