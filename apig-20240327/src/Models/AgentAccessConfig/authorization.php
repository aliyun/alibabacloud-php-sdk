<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\AgentAccessConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\AgentAuthorizationPrincipal;

class authorization extends Model
{
    /**
     * @var string
     */
    public $authType;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var AgentAuthorizationPrincipal[]
     */
    public $principals;
    protected $_name = [
        'authType' => 'authType',
        'enabled' => 'enabled',
        'principals' => 'principals',
    ];

    public function validate()
    {
        if (\is_array($this->principals)) {
            Model::validateArray($this->principals);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authType) {
            $res['authType'] = $this->authType;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->principals) {
            if (\is_array($this->principals)) {
                $res['principals'] = [];
                $n1 = 0;
                foreach ($this->principals as $item1) {
                    $res['principals'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['authType'])) {
            $model->authType = $map['authType'];
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['principals'])) {
            if (!empty($map['principals'])) {
                $model->principals = [];
                $n1 = 0;
                foreach ($map['principals'] as $item1) {
                    $model->principals[$n1] = AgentAuthorizationPrincipal::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
