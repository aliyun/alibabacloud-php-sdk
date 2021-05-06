<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateCallbackConfigResponseBody;

use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateCallbackConfigResponseBody\result\imConfig;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description im相关配置
     *
     * @var imConfig
     */
    public $imConfig;
    protected $_name = [
        'imConfig' => 'ImConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imConfig) {
            $res['ImConfig'] = null !== $this->imConfig ? $this->imConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImConfig'])) {
            $model->imConfig = imConfig::fromMap($map['ImConfig']);
        }

        return $model;
    }
}
