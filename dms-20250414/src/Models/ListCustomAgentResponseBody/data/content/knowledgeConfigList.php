<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\ListCustomAgentResponseBody\data\content;

use AlibabaCloud\Dara\Model;

class knowledgeConfigList extends Model
{
    /**
     * @var string
     */
    public $accessType;

    /**
     * @var string
     */
    public $mcpServerId;
    protected $_name = [
        'accessType' => 'AccessType',
        'mcpServerId' => 'McpServerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessType) {
            $res['AccessType'] = $this->accessType;
        }

        if (null !== $this->mcpServerId) {
            $res['McpServerId'] = $this->mcpServerId;
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
        if (isset($map['AccessType'])) {
            $model->accessType = $map['AccessType'];
        }

        if (isset($map['McpServerId'])) {
            $model->mcpServerId = $map['McpServerId'];
        }

        return $model;
    }
}
