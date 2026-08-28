<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetExternalAgentResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetExternalAgentResponseBody\data\template\aiRegistry;

class template extends Model
{
    /**
     * @var aiRegistry
     */
    public $aiRegistry;
    protected $_name = [
        'aiRegistry' => 'aiRegistry',
    ];

    public function validate()
    {
        if (null !== $this->aiRegistry) {
            $this->aiRegistry->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiRegistry) {
            $res['aiRegistry'] = null !== $this->aiRegistry ? $this->aiRegistry->toArray($noStream) : $this->aiRegistry;
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
        if (isset($map['aiRegistry'])) {
            $model->aiRegistry = aiRegistry::fromMap($map['aiRegistry']);
        }

        return $model;
    }
}
