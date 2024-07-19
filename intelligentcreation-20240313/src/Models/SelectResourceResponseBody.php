<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SelectResourceResponseBody\resourceInfoList;
use AlibabaCloud\Tea\Model;

class SelectResourceResponseBody extends Model
{
    /**
     * @example 0E8B1746-AE35-5C4B-A3A8-345B274AE32C
     *
     * @var string
     */
    public $requestId;

    /**
     * @var resourceInfoList[]
     */
    public $resourceInfoList;
    protected $_name = [
        'requestId'        => 'requestId',
        'resourceInfoList' => 'resourceInfoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->resourceInfoList) {
            $res['resourceInfoList'] = [];
            if (null !== $this->resourceInfoList && \is_array($this->resourceInfoList)) {
                $n = 0;
                foreach ($this->resourceInfoList as $item) {
                    $res['resourceInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SelectResourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['resourceInfoList'])) {
            if (!empty($map['resourceInfoList'])) {
                $model->resourceInfoList = [];
                $n                       = 0;
                foreach ($map['resourceInfoList'] as $item) {
                    $model->resourceInfoList[$n++] = null !== $item ? resourceInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
