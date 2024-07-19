<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\QueryAvatarResourceResponseBody\queryResourceInfoList;
use AlibabaCloud\Tea\Model;

class QueryAvatarResourceResponseBody extends Model
{
    /**
     * @var queryResourceInfoList[]
     */
    public $queryResourceInfoList;

    /**
     * @example D5798660-1531-5D12-9C20-16FEE9D22351
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'queryResourceInfoList' => 'queryResourceInfoList',
        'requestId'             => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->queryResourceInfoList) {
            $res['queryResourceInfoList'] = [];
            if (null !== $this->queryResourceInfoList && \is_array($this->queryResourceInfoList)) {
                $n = 0;
                foreach ($this->queryResourceInfoList as $item) {
                    $res['queryResourceInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryAvatarResourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['queryResourceInfoList'])) {
            if (!empty($map['queryResourceInfoList'])) {
                $model->queryResourceInfoList = [];
                $n                            = 0;
                foreach ($map['queryResourceInfoList'] as $item) {
                    $model->queryResourceInfoList[$n++] = null !== $item ? queryResourceInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
