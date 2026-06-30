<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetApiKeyResponseBody\apiKey;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetApiKeyResponseBody\apiKey\auth\modelAccessScope;

class auth extends Model
{
    /**
     * @var string[]
     */
    public $accessIps;

    /**
     * @var modelAccessScope
     */
    public $modelAccessScope;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'accessIps' => 'accessIps',
        'modelAccessScope' => 'modelAccessScope',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->accessIps)) {
            Model::validateArray($this->accessIps);
        }
        if (null !== $this->modelAccessScope) {
            $this->modelAccessScope->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessIps) {
            if (\is_array($this->accessIps)) {
                $res['accessIps'] = [];
                $n1 = 0;
                foreach ($this->accessIps as $item1) {
                    $res['accessIps'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->modelAccessScope) {
            $res['modelAccessScope'] = null !== $this->modelAccessScope ? $this->modelAccessScope->toArray($noStream) : $this->modelAccessScope;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['accessIps'])) {
            if (!empty($map['accessIps'])) {
                $model->accessIps = [];
                $n1 = 0;
                foreach ($map['accessIps'] as $item1) {
                    $model->accessIps[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['modelAccessScope'])) {
            $model->modelAccessScope = modelAccessScope::fromMap($map['modelAccessScope']);
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
