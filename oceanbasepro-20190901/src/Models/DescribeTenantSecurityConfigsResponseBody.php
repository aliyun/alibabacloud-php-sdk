<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTenantSecurityConfigsResponseBody\configs;

class DescribeTenantSecurityConfigsResponseBody extends Model
{
    /**
     * @var configs
     */
    public $configs;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'configs' => 'Configs',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->configs) {
            $this->configs->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configs) {
            $res['Configs'] = null !== $this->configs ? $this->configs->toArray($noStream) : $this->configs;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Configs'])) {
            $model->configs = configs::fromMap($map['Configs']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
