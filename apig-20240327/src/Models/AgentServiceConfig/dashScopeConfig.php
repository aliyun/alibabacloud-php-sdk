<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\AgentServiceConfig;

use AlibabaCloud\SDK\APIG\V20240327\Models\AgentServiceConfig\dashScopeConfig\appCredentials;
use AlibabaCloud\Tea\Model;

class dashScopeConfig extends Model
{
    /**
     * @var appCredentials[]
     */
    public $appCredentials;
    protected $_name = [
        'appCredentials' => 'appCredentials',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appCredentials) {
            $res['appCredentials'] = [];
            if (null !== $this->appCredentials && \is_array($this->appCredentials)) {
                $n = 0;
                foreach ($this->appCredentials as $item) {
                    $res['appCredentials'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dashScopeConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appCredentials'])) {
            if (!empty($map['appCredentials'])) {
                $model->appCredentials = [];
                $n = 0;
                foreach ($map['appCredentials'] as $item) {
                    $model->appCredentials[$n++] = null !== $item ? appCredentials::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
