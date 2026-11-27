<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetMcpResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetMcpResponseBody\data\appliedVirtualConfig\sources;

class appliedVirtualConfig extends Model
{
    /**
     * @var sources[]
     */
    public $sources;
    protected $_name = [
        'sources' => 'sources',
    ];

    public function validate()
    {
        if (\is_array($this->sources)) {
            Model::validateArray($this->sources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sources) {
            if (\is_array($this->sources)) {
                $res['sources'] = [];
                $n1 = 0;
                foreach ($this->sources as $item1) {
                    $res['sources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['sources'])) {
            if (!empty($map['sources'])) {
                $model->sources = [];
                $n1 = 0;
                foreach ($map['sources'] as $item1) {
                    $model->sources[$n1] = sources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
