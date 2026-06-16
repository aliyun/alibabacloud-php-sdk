<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\ListAgentSpacesResponseBody\agentSpaces;

use AlibabaCloud\Dara\Model;

class mseNamespace extends Model
{
    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var string
     */
    public $namespaceName;
    protected $_name = [
        'namespaceId' => 'namespaceId',
        'namespaceName' => 'namespaceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->namespaceId) {
            $res['namespaceId'] = $this->namespaceId;
        }

        if (null !== $this->namespaceName) {
            $res['namespaceName'] = $this->namespaceName;
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
        if (isset($map['namespaceId'])) {
            $model->namespaceId = $map['namespaceId'];
        }

        if (isset($map['namespaceName'])) {
            $model->namespaceName = $map['namespaceName'];
        }

        return $model;
    }
}
