<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigResponseBody\config;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigResponseBody\config\configValueList\configValue;
use AlibabaCloud\Tea\Model;

class configValueList extends Model
{
    /**
     * @var configValue[]
     */
    public $configValue;
    protected $_name = [
        'configValue' => 'ConfigValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configValue) {
            $res['ConfigValue'] = [];
            if (null !== $this->configValue && \is_array($this->configValue)) {
                $n = 0;
                foreach ($this->configValue as $item) {
                    $res['ConfigValue'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configValueList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigValue'])) {
            if (!empty($map['ConfigValue'])) {
                $model->configValue = [];
                $n                  = 0;
                foreach ($map['ConfigValue'] as $item) {
                    $model->configValue[$n++] = null !== $item ? configValue::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
