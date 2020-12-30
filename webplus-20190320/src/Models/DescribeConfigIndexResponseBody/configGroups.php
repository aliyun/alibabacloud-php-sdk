<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeConfigIndexResponseBody;

use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeConfigIndexResponseBody\configGroups\configGroup;
use AlibabaCloud\Tea\Model;

class configGroups extends Model
{
    /**
     * @var configGroup[]
     */
    public $configGroup;
    protected $_name = [
        'configGroup' => 'ConfigGroup',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configGroup) {
            $res['ConfigGroup'] = [];
            if (null !== $this->configGroup && \is_array($this->configGroup)) {
                $n = 0;
                foreach ($this->configGroup as $item) {
                    $res['ConfigGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigGroup'])) {
            if (!empty($map['ConfigGroup'])) {
                $model->configGroup = [];
                $n                  = 0;
                foreach ($map['ConfigGroup'] as $item) {
                    $model->configGroup[$n++] = null !== $item ? configGroup::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
