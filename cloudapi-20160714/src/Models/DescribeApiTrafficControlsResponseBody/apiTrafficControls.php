<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiTrafficControlsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiTrafficControlsResponseBody\apiTrafficControls\apiTrafficControlItem;

class apiTrafficControls extends Model
{
    /**
     * @var apiTrafficControlItem[]
     */
    public $apiTrafficControlItem;
    protected $_name = [
        'apiTrafficControlItem' => 'ApiTrafficControlItem',
    ];

    public function validate()
    {
        if (\is_array($this->apiTrafficControlItem)) {
            Model::validateArray($this->apiTrafficControlItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiTrafficControlItem) {
            if (\is_array($this->apiTrafficControlItem)) {
                $res['ApiTrafficControlItem'] = [];
                $n1                           = 0;
                foreach ($this->apiTrafficControlItem as $item1) {
                    $res['ApiTrafficControlItem'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ApiTrafficControlItem'])) {
            if (!empty($map['ApiTrafficControlItem'])) {
                $model->apiTrafficControlItem = [];
                $n1                           = 0;
                foreach ($map['ApiTrafficControlItem'] as $item1) {
                    $model->apiTrafficControlItem[$n1++] = apiTrafficControlItem::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
