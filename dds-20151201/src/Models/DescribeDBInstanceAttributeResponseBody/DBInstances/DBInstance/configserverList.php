<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceAttributeResponseBody\DBInstances\DBInstance;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceAttributeResponseBody\DBInstances\DBInstance\configserverList\configserverAttribute;
use AlibabaCloud\Tea\Model;

class configserverList extends Model
{
    /**
     * @var configserverAttribute[]
     */
    public $configserverAttribute;
    protected $_name = [
        'configserverAttribute' => 'ConfigserverAttribute',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configserverAttribute) {
            $res['ConfigserverAttribute'] = [];
            if (null !== $this->configserverAttribute && \is_array($this->configserverAttribute)) {
                $n = 0;
                foreach ($this->configserverAttribute as $item) {
                    $res['ConfigserverAttribute'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configserverList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigserverAttribute'])) {
            if (!empty($map['ConfigserverAttribute'])) {
                $model->configserverAttribute = [];
                $n                            = 0;
                foreach ($map['ConfigserverAttribute'] as $item) {
                    $model->configserverAttribute[$n++] = null !== $item ? configserverAttribute::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
