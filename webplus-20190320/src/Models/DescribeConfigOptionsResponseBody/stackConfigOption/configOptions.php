<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeConfigOptionsResponseBody\stackConfigOption;

use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeConfigOptionsResponseBody\stackConfigOption\configOptions\configOption;
use AlibabaCloud\Tea\Model;

class configOptions extends Model
{
    /**
     * @var configOption[]
     */
    public $configOption;
    protected $_name = [
        'configOption' => 'ConfigOption',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configOption) {
            $res['ConfigOption'] = [];
            if (null !== $this->configOption && \is_array($this->configOption)) {
                $n = 0;
                foreach ($this->configOption as $item) {
                    $res['ConfigOption'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigOption'])) {
            if (!empty($map['ConfigOption'])) {
                $model->configOption = [];
                $n                   = 0;
                foreach ($map['ConfigOption'] as $item) {
                    $model->configOption[$n++] = null !== $item ? configOption::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
