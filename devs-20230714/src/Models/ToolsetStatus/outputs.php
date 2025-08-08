<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models\ToolsetStatus;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devs\V20230714\Models\MCPToolMeta;
use AlibabaCloud\SDK\Devs\V20230714\Models\OpenAPIToolMeta;
use AlibabaCloud\SDK\Devs\V20230714\Models\ToolsetStatus\outputs\mcpServerConfig;
use AlibabaCloud\SDK\Devs\V20230714\Models\ToolsetStatus\outputs\urls;

class outputs extends Model
{
    /**
     * @var string
     */
    public $functionArn;

    /**
     * @var mcpServerConfig
     */
    public $mcpServerConfig;

    /**
     * @var OpenAPIToolMeta[]
     */
    public $openApiTools;

    /**
     * @var MCPToolMeta[]
     */
    public $tools;

    /**
     * @var urls
     */
    public $urls;
    protected $_name = [
        'functionArn' => 'functionArn',
        'mcpServerConfig' => 'mcpServerConfig',
        'openApiTools' => 'openApiTools',
        'tools' => 'tools',
        'urls' => 'urls',
    ];

    public function validate()
    {
        if (null !== $this->mcpServerConfig) {
            $this->mcpServerConfig->validate();
        }
        if (\is_array($this->openApiTools)) {
            Model::validateArray($this->openApiTools);
        }
        if (\is_array($this->tools)) {
            Model::validateArray($this->tools);
        }
        if (null !== $this->urls) {
            $this->urls->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->functionArn) {
            $res['functionArn'] = $this->functionArn;
        }

        if (null !== $this->mcpServerConfig) {
            $res['mcpServerConfig'] = null !== $this->mcpServerConfig ? $this->mcpServerConfig->toArray($noStream) : $this->mcpServerConfig;
        }

        if (null !== $this->openApiTools) {
            if (\is_array($this->openApiTools)) {
                $res['openApiTools'] = [];
                $n1 = 0;
                foreach ($this->openApiTools as $item1) {
                    $res['openApiTools'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tools) {
            if (\is_array($this->tools)) {
                $res['tools'] = [];
                $n1 = 0;
                foreach ($this->tools as $item1) {
                    $res['tools'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->urls) {
            $res['urls'] = null !== $this->urls ? $this->urls->toArray($noStream) : $this->urls;
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
        if (isset($map['functionArn'])) {
            $model->functionArn = $map['functionArn'];
        }

        if (isset($map['mcpServerConfig'])) {
            $model->mcpServerConfig = mcpServerConfig::fromMap($map['mcpServerConfig']);
        }

        if (isset($map['openApiTools'])) {
            if (!empty($map['openApiTools'])) {
                $model->openApiTools = [];
                $n1 = 0;
                foreach ($map['openApiTools'] as $item1) {
                    $model->openApiTools[$n1] = OpenAPIToolMeta::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['tools'])) {
            if (!empty($map['tools'])) {
                $model->tools = [];
                $n1 = 0;
                foreach ($map['tools'] as $item1) {
                    $model->tools[$n1] = MCPToolMeta::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['urls'])) {
            $model->urls = urls::fromMap($map['urls']);
        }

        return $model;
    }
}
