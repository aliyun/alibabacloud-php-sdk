<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiIpControlsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiIpControlsResponseBody\apiIpControls\apiIpControlItem;

class apiIpControls extends Model
{
    /**
     * @var apiIpControlItem[]
     */
    public $apiIpControlItem;
    protected $_name = [
        'apiIpControlItem' => 'ApiIpControlItem',
    ];

    public function validate()
    {
        if (\is_array($this->apiIpControlItem)) {
            Model::validateArray($this->apiIpControlItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiIpControlItem) {
            if (\is_array($this->apiIpControlItem)) {
                $res['ApiIpControlItem'] = [];
                $n1 = 0;
                foreach ($this->apiIpControlItem as $item1) {
                    $res['ApiIpControlItem'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ApiIpControlItem'])) {
            if (!empty($map['ApiIpControlItem'])) {
                $model->apiIpControlItem = [];
                $n1 = 0;
                foreach ($map['ApiIpControlItem'] as $item1) {
                    $model->apiIpControlItem[$n1] = apiIpControlItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
