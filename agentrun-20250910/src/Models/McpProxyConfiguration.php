<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class McpProxyConfiguration extends Model
{
    /**
     * @var Hook[]
     */
    public $hooks;
    protected $_name = [
        'hooks' => 'hooks',
    ];

    public function validate()
    {
        if (\is_array($this->hooks)) {
            Model::validateArray($this->hooks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hooks) {
            if (\is_array($this->hooks)) {
                $res['hooks'] = [];
                $n1 = 0;
                foreach ($this->hooks as $item1) {
                    $res['hooks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['hooks'])) {
            if (!empty($map['hooks'])) {
                $model->hooks = [];
                $n1 = 0;
                foreach ($map['hooks'] as $item1) {
                    $model->hooks[$n1] = Hook::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
