<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmMonitorConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmMonitorConfigResponseBody\ispCityNodes\ispCityNode;

class ispCityNodes extends Model
{
    /**
     * @var ispCityNode[]
     */
    public $ispCityNode;
    protected $_name = [
        'ispCityNode' => 'IspCityNode',
    ];

    public function validate()
    {
        if (\is_array($this->ispCityNode)) {
            Model::validateArray($this->ispCityNode);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ispCityNode) {
            if (\is_array($this->ispCityNode)) {
                $res['IspCityNode'] = [];
                $n1                 = 0;
                foreach ($this->ispCityNode as $item1) {
                    $res['IspCityNode'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['IspCityNode'])) {
            if (!empty($map['IspCityNode'])) {
                $model->ispCityNode = [];
                $n1                 = 0;
                foreach ($map['IspCityNode'] as $item1) {
                    $model->ispCityNode[$n1++] = ispCityNode::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
