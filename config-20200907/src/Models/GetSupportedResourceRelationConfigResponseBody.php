<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\GetSupportedResourceRelationConfigResponseBody\resourceRelationConfigList;
use AlibabaCloud\Tea\Model;

class GetSupportedResourceRelationConfigResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 409D022F-394C-5AAB-A74A-2F1DC9F6375E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description An array that contains the relationships.
     *
     * @var resourceRelationConfigList[]
     */
    public $resourceRelationConfigList;
    protected $_name = [
        'requestId'                  => 'RequestId',
        'resourceRelationConfigList' => 'ResourceRelationConfigList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceRelationConfigList) {
            $res['ResourceRelationConfigList'] = [];
            if (null !== $this->resourceRelationConfigList && \is_array($this->resourceRelationConfigList)) {
                $n = 0;
                foreach ($this->resourceRelationConfigList as $item) {
                    $res['ResourceRelationConfigList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSupportedResourceRelationConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceRelationConfigList'])) {
            if (!empty($map['ResourceRelationConfigList'])) {
                $model->resourceRelationConfigList = [];
                $n                                 = 0;
                foreach ($map['ResourceRelationConfigList'] as $item) {
                    $model->resourceRelationConfigList[$n++] = null !== $item ? resourceRelationConfigList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
