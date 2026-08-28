<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\ListMcpsResponseBody\items;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListMcpsResponseBody\items\auth\directProxy;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListMcpsResponseBody\items\auth\httpToMcp;

class auth extends Model
{
    /**
     * @var directProxy
     */
    public $directProxy;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var httpToMcp[]
     */
    public $httpToMcp;
    protected $_name = [
        'directProxy' => 'directProxy',
        'enabled' => 'enabled',
        'httpToMcp' => 'httpToMcp',
    ];

    public function validate()
    {
        if (null !== $this->directProxy) {
            $this->directProxy->validate();
        }
        if (\is_array($this->httpToMcp)) {
            Model::validateArray($this->httpToMcp);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->directProxy) {
            $res['directProxy'] = null !== $this->directProxy ? $this->directProxy->toArray($noStream) : $this->directProxy;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->httpToMcp) {
            if (\is_array($this->httpToMcp)) {
                $res['httpToMcp'] = [];
                $n1 = 0;
                foreach ($this->httpToMcp as $item1) {
                    $res['httpToMcp'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['directProxy'])) {
            $model->directProxy = directProxy::fromMap($map['directProxy']);
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['httpToMcp'])) {
            if (!empty($map['httpToMcp'])) {
                $model->httpToMcp = [];
                $n1 = 0;
                foreach ($map['httpToMcp'] as $item1) {
                    $model->httpToMcp[$n1] = httpToMcp::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
