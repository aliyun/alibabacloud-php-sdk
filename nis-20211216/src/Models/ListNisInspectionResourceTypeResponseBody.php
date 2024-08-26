<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models;

use AlibabaCloud\SDK\Nis\V20211216\Models\ListNisInspectionResourceTypeResponseBody\resourceTypeList;
use AlibabaCloud\Tea\Model;

class ListNisInspectionResourceTypeResponseBody extends Model
{
    /**
     * @example D5E98683-355B-5867-8D3D-A24755F6895B
     *
     * @var string
     */
    public $requestId;

    /**
     * @var resourceTypeList[]
     */
    public $resourceTypeList;
    protected $_name = [
        'requestId'        => 'RequestId',
        'resourceTypeList' => 'ResourceTypeList',
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
        if (null !== $this->resourceTypeList) {
            $res['ResourceTypeList'] = [];
            if (null !== $this->resourceTypeList && \is_array($this->resourceTypeList)) {
                $n = 0;
                foreach ($this->resourceTypeList as $item) {
                    $res['ResourceTypeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListNisInspectionResourceTypeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceTypeList'])) {
            if (!empty($map['ResourceTypeList'])) {
                $model->resourceTypeList = [];
                $n                       = 0;
                foreach ($map['ResourceTypeList'] as $item) {
                    $model->resourceTypeList[$n++] = null !== $item ? resourceTypeList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
