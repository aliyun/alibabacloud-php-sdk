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

    /**
     * @var string
     */
    public $vpcMcp;

    /**
     * @var string
     */
    public $vpcSse;
    protected $_name = [
        'mcp' => 'mcp',
        'sse' => 'sse',
        'vpcMcp' => 'vpcMcp',
        'vpcSse' => 'vpcSse',
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

        if (null !== $this->vpcMcp) {
            $res['vpcMcp'] = $this->vpcMcp;
        }

        if (null !== $this->vpcSse) {
            $res['vpcSse'] = $this->vpcSse;
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

        if (isset($map['vpcMcp'])) {
            $model->vpcMcp = $map['vpcMcp'];
        }

        if (isset($map['vpcSse'])) {
            $model->vpcSse = $map['vpcSse'];
        }

        return $model;
    }
}
