<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiProductsByAppResponseBody\apiProductInfoList;

use AlibabaCloud\Tea\Model;

class apiProductInfo extends Model
{
    /**
     * @example 117b7a64a8b3f064eaa4a47ac62aac5e
     *
     * @var string
     */
    public $apiProductId;
    protected $_name = [
        'apiProductId' => 'ApiProductId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiProductId) {
            $res['ApiProductId'] = $this->apiProductId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiProductInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiProductId'])) {
            $model->apiProductId = $map['ApiProductId'];
        }

        return $model;
    }
}
