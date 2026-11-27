<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetMcpResponseBody\data\lastValidation\items\sources;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetMcpResponseBody\data\lastValidation\items\sources\tools\currentDefinition;

class tools extends Model
{
    /**
     * @var currentDefinition
     */
    public $currentDefinition;

    /**
     * @var string
     */
    public $currentDigest;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $savedDigest;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'currentDefinition' => 'currentDefinition',
        'currentDigest' => 'currentDigest',
        'name' => 'name',
        'savedDigest' => 'savedDigest',
        'status' => 'status',
    ];

    public function validate()
    {
        if (null !== $this->currentDefinition) {
            $this->currentDefinition->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentDefinition) {
            $res['currentDefinition'] = null !== $this->currentDefinition ? $this->currentDefinition->toArray($noStream) : $this->currentDefinition;
        }

        if (null !== $this->currentDigest) {
            $res['currentDigest'] = $this->currentDigest;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->savedDigest) {
            $res['savedDigest'] = $this->savedDigest;
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
        if (isset($map['currentDefinition'])) {
            $model->currentDefinition = currentDefinition::fromMap($map['currentDefinition']);
        }

        if (isset($map['currentDigest'])) {
            $model->currentDigest = $map['currentDigest'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['savedDigest'])) {
            $model->savedDigest = $map['savedDigest'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
