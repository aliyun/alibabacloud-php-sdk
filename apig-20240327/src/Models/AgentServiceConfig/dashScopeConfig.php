<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\AgentServiceConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\AgentServiceConfig\dashScopeConfig\appCredentials;

class dashScopeConfig extends Model
{
    /**
     * @var appCredentials[]
     */
    public $appCredentials;
    protected $_name = [
        'appCredentials' => 'appCredentials',
    ];

    public function validate()
    {
        if (\is_array($this->appCredentials)) {
            Model::validateArray($this->appCredentials);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appCredentials) {
            if (\is_array($this->appCredentials)) {
                $res['appCredentials'] = [];
                $n1 = 0;
                foreach ($this->appCredentials as $item1) {
                    $res['appCredentials'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['appCredentials'])) {
            if (!empty($map['appCredentials'])) {
                $model->appCredentials = [];
                $n1 = 0;
                foreach ($map['appCredentials'] as $item1) {
                    $model->appCredentials[$n1] = appCredentials::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
