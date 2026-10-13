<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateConnectorResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $boundAgentCount;

    /**
     * @var string
     */
    public $enabledAt;

    /**
     * @var string
     */
    public $metadata;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'boundAgentCount' => 'boundAgentCount',
        'enabledAt' => 'enabledAt',
        'metadata' => 'metadata',
        'name' => 'name',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->boundAgentCount) {
            $res['boundAgentCount'] = $this->boundAgentCount;
        }

        if (null !== $this->enabledAt) {
            $res['enabledAt'] = $this->enabledAt;
        }

        if (null !== $this->metadata) {
            $res['metadata'] = $this->metadata;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['boundAgentCount'])) {
            $model->boundAgentCount = $map['boundAgentCount'];
        }

        if (isset($map['enabledAt'])) {
            $model->enabledAt = $map['enabledAt'];
        }

        if (isset($map['metadata'])) {
            $model->metadata = $map['metadata'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
