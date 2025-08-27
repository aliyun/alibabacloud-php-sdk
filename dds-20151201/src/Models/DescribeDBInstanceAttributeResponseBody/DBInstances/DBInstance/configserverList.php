<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceAttributeResponseBody\DBInstances\DBInstance;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceAttributeResponseBody\DBInstances\DBInstance\configserverList\configserverAttribute;

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
        if (\is_array($this->configserverAttribute)) {
            Model::validateArray($this->configserverAttribute);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configserverAttribute) {
            if (\is_array($this->configserverAttribute)) {
                $res['ConfigserverAttribute'] = [];
                $n1 = 0;
                foreach ($this->configserverAttribute as $item1) {
                    $res['ConfigserverAttribute'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ConfigserverAttribute'])) {
            if (!empty($map['ConfigserverAttribute'])) {
                $model->configserverAttribute = [];
                $n1 = 0;
                foreach ($map['ConfigserverAttribute'] as $item1) {
                    $model->configserverAttribute[$n1] = configserverAttribute::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
