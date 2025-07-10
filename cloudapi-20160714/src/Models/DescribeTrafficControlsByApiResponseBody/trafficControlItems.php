<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsByApiResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsByApiResponseBody\trafficControlItems\trafficControlItem;

class trafficControlItems extends Model
{
    /**
     * @var trafficControlItem[]
     */
    public $trafficControlItem;
    protected $_name = [
        'trafficControlItem' => 'TrafficControlItem',
    ];

    public function validate()
    {
        if (\is_array($this->trafficControlItem)) {
            Model::validateArray($this->trafficControlItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->trafficControlItem) {
            if (\is_array($this->trafficControlItem)) {
                $res['TrafficControlItem'] = [];
                $n1 = 0;
                foreach ($this->trafficControlItem as $item1) {
                    $res['TrafficControlItem'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TrafficControlItem'])) {
            if (!empty($map['TrafficControlItem'])) {
                $model->trafficControlItem = [];
                $n1 = 0;
                foreach ($map['TrafficControlItem'] as $item1) {
                    $model->trafficControlItem[$n1] = trafficControlItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
