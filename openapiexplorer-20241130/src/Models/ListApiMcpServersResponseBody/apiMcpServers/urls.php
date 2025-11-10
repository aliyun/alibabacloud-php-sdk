<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAPIExplorer\V20241130\Models\ListApiMcpServersResponseBody\apiMcpServers;

use AlibabaCloud\Dara\Model;

class urls extends Model
{
    /**
     * @var string
     */
    public $mcp;

    /**
     * @var string
     */
    public $sse;
    protected $_name = [
        'mcp' => 'mcp',
        'sse' => 'sse',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mcp) {
            $res['mcp'] = $this->mcp;
        }

        if (null !== $this->sse) {
            $res['sse'] = $this->sse;
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
        if (isset($map['mcp'])) {
            $model->mcp = $map['mcp'];
        }

        if (isset($map['sse'])) {
            $model->sse = $map['sse'];
        }

        return $model;
    }
}
