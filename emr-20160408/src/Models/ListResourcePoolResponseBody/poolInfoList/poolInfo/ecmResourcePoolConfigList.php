<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListResourcePoolResponseBody\poolInfoList\poolInfo;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListResourcePoolResponseBody\poolInfoList\poolInfo\ecmResourcePoolConfigList\ecmResourcePoolConfig;
use AlibabaCloud\Tea\Model;

class ecmResourcePoolConfigList extends Model
{
    /**
     * @var ecmResourcePoolConfig[]
     */
    public $ecmResourcePoolConfig;
    protected $_name = [
        'ecmResourcePoolConfig' => 'EcmResourcePoolConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecmResourcePoolConfig) {
            $res['EcmResourcePoolConfig'] = [];
            if (null !== $this->ecmResourcePoolConfig && \is_array($this->ecmResourcePoolConfig)) {
                $n = 0;
                foreach ($this->ecmResourcePoolConfig as $item) {
                    $res['EcmResourcePoolConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ecmResourcePoolConfigList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EcmResourcePoolConfig'])) {
            if (!empty($map['EcmResourcePoolConfig'])) {
                $model->ecmResourcePoolConfig = [];
                $n                            = 0;
                foreach ($map['EcmResourcePoolConfig'] as $item) {
                    $model->ecmResourcePoolConfig[$n++] = null !== $item ? ecmResourcePoolConfig::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
