<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePhysicalConnectionLOAResponseBody\physicalConnectionLOAType;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePhysicalConnectionLOAResponseBody\physicalConnectionLOAType\PMInfo\PMInfo;

class PMInfo extends Model
{
    /**
     * @var PMInfo[]
     */
    public $PMInfo;
    protected $_name = [
        'PMInfo' => 'PMInfo',
    ];

    public function validate()
    {
        if (\is_array($this->PMInfo)) {
            Model::validateArray($this->PMInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->PMInfo) {
            if (\is_array($this->PMInfo)) {
                $res['PMInfo'] = [];
                $n1            = 0;
                foreach ($this->PMInfo as $item1) {
                    $res['PMInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PMInfo'])) {
            if (!empty($map['PMInfo'])) {
                $model->PMInfo = [];
                $n1            = 0;
                foreach ($map['PMInfo'] as $item1) {
                    $model->PMInfo[$n1++] = self::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
