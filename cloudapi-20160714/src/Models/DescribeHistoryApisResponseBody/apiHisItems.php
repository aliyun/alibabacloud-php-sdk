<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeHistoryApisResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeHistoryApisResponseBody\apiHisItems\apiHisItem;

class apiHisItems extends Model
{
    /**
     * @var apiHisItem[]
     */
    public $apiHisItem;
    protected $_name = [
        'apiHisItem' => 'ApiHisItem',
    ];

    public function validate()
    {
        if (\is_array($this->apiHisItem)) {
            Model::validateArray($this->apiHisItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiHisItem) {
            if (\is_array($this->apiHisItem)) {
                $res['ApiHisItem'] = [];
                $n1                = 0;
                foreach ($this->apiHisItem as $item1) {
                    $res['ApiHisItem'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ApiHisItem'])) {
            if (!empty($map['ApiHisItem'])) {
                $model->apiHisItem = [];
                $n1                = 0;
                foreach ($map['ApiHisItem'] as $item1) {
                    $model->apiHisItem[$n1++] = apiHisItem::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
