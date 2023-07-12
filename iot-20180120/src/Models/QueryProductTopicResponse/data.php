<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryProductTopicResponse;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryProductTopicResponse\data\productTopicInfo;
use AlibabaCloud\Tea\Model;

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
        Model::validateRequired('productTopicInfo', $this->productTopicInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productTopicInfo) {
            $res['ProductTopicInfo'] = [];
            if (null !== $this->productTopicInfo && \is_array($this->productTopicInfo)) {
                $n = 0;
                foreach ($this->productTopicInfo as $item) {
                    $res['ProductTopicInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductTopicInfo'])) {
            if (!empty($map['ProductTopicInfo'])) {
                $model->productTopicInfo = [];
                $n                       = 0;
                foreach ($map['ProductTopicInfo'] as $item) {
                    $model->productTopicInfo[$n++] = null !== $item ? productTopicInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
