<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeConfigIndexResponseBody\configGroups\configGroup;

use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeConfigIndexResponseBody\configGroups\configGroup\configPaths\configPath;
use AlibabaCloud\Tea\Model;

class configPaths extends Model
{
    /**
     * @var configPath[]
     */
    public $configPath;
    protected $_name = [
        'configPath' => 'ConfigPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configPath) {
            $res['ConfigPath'] = [];
            if (null !== $this->configPath && \is_array($this->configPath)) {
                $n = 0;
                foreach ($this->configPath as $item) {
                    $res['ConfigPath'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configPaths
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigPath'])) {
            if (!empty($map['ConfigPath'])) {
                $model->configPath = [];
                $n                 = 0;
                foreach ($map['ConfigPath'] as $item) {
                    $model->configPath[$n++] = null !== $item ? configPath::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
