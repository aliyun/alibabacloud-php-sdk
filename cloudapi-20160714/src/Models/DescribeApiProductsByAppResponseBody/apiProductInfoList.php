<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiProductsByAppResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiProductsByAppResponseBody\apiProductInfoList\apiProductInfo;

class apiProductInfoList extends Model
{
    /**
     * @var apiProductInfo[]
     */
    public $apiProductInfo;
    protected $_name = [
        'apiProductInfo' => 'ApiProductInfo',
    ];

    public function validate()
    {
        if (\is_array($this->apiProductInfo)) {
            Model::validateArray($this->apiProductInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiProductInfo) {
            if (\is_array($this->apiProductInfo)) {
                $res['ApiProductInfo'] = [];
                $n1                    = 0;
                foreach ($this->apiProductInfo as $item1) {
                    $res['ApiProductInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ApiProductInfo'])) {
            if (!empty($map['ApiProductInfo'])) {
                $model->apiProductInfo = [];
                $n1                    = 0;
                foreach ($map['ApiProductInfo'] as $item1) {
                    $model->apiProductInfo[$n1++] = apiProductInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
