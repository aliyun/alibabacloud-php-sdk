<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryProductTopicResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryProductTopicResponseBody\data\productTopicInfo;

class data extends Model
{
    /**
     * @var productTopicInfo[]
     */
    public $productTopicInfo;
    protected $_name = [
        'productTopicInfo' => 'ProductTopicInfo',
    ];

    public function validate()
    {
        if (\is_array($this->productTopicInfo)) {
            Model::validateArray($this->productTopicInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->productTopicInfo) {
            if (\is_array($this->productTopicInfo)) {
                $res['ProductTopicInfo'] = [];
                $n1 = 0;
                foreach ($this->productTopicInfo as $item1) {
                    $res['ProductTopicInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ProductTopicInfo'])) {
            if (!empty($map['ProductTopicInfo'])) {
                $model->productTopicInfo = [];
                $n1 = 0;
                foreach ($map['ProductTopicInfo'] as $item1) {
                    $model->productTopicInfo[$n1] = productTopicInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
