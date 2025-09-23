<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAIDBClusterAttributeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAIDBClusterAttributeResponseBody\endpointList\netInfoItems;

class endpointList extends Model
{
    /**
     * @var netInfoItems[]
     */
    public $netInfoItems;
    protected $_name = [
        'netInfoItems' => 'NetInfoItems',
    ];

    public function validate()
    {
        if (\is_array($this->netInfoItems)) {
            Model::validateArray($this->netInfoItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->netInfoItems) {
            if (\is_array($this->netInfoItems)) {
                $res['NetInfoItems'] = [];
                $n1 = 0;
                foreach ($this->netInfoItems as $item1) {
                    $res['NetInfoItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NetInfoItems'])) {
            if (!empty($map['NetInfoItems'])) {
                $model->netInfoItems = [];
                $n1 = 0;
                foreach ($map['NetInfoItems'] as $item1) {
                    $model->netInfoItems[$n1] = netInfoItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
