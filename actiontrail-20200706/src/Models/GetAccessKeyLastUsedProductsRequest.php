<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\Tea\Model;

class GetAccessKeyLastUsedProductsRequest extends Model
{
    /**
     * @description The AccessKey ID.
     *
     * @example LTAI4Fz1ykT4qxgNMvN6****
     *
     * @var string
     */
    public $accessKey;
    protected $_name = [
        'accessKey' => 'AccessKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKey) {
            $res['AccessKey'] = $this->accessKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAccessKeyLastUsedProductsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKey'])) {
            $model->accessKey = $map['AccessKey'];
        }

        return $model;
    }
}
