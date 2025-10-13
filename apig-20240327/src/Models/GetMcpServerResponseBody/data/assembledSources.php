<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetMcpServerResponseBody\data;

use AlibabaCloud\Dara\Model;

class assembledSources extends Model
{
    /**
     * @var string
     */
    public $mcpServerId;

    /**
     * @var string
     */
    public $mcpServerName;

    /**
     * @var string[]
     */
    public $tools;
    protected $_name = [
        'mcpServerId' => 'mcpServerId',
        'mcpServerName' => 'mcpServerName',
        'tools' => 'tools',
    ];

    public function validate()
    {
        if (\is_array($this->tools)) {
            Model::validateArray($this->tools);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mcpServerId) {
            $res['mcpServerId'] = $this->mcpServerId;
        }

        if (null !== $this->mcpServerName) {
            $res['mcpServerName'] = $this->mcpServerName;
        }

        if (null !== $this->tools) {
            if (\is_array($this->tools)) {
                $res['tools'] = [];
                $n1 = 0;
                foreach ($this->tools as $item1) {
                    $res['tools'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['mcpServerId'])) {
            $model->mcpServerId = $map['mcpServerId'];
        }

        if (isset($map['mcpServerName'])) {
            $model->mcpServerName = $map['mcpServerName'];
        }

        if (isset($map['tools'])) {
            if (!empty($map['tools'])) {
                $model->tools = [];
                $n1 = 0;
                foreach ($map['tools'] as $item1) {
                    $model->tools[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
