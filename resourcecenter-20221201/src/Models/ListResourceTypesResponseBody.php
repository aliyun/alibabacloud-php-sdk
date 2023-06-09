<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models;

use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListResourceTypesResponseBody\resourceTypes;
use AlibabaCloud\Tea\Model;

class ListResourceTypesResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example E5556E4C-479A-5BBB-B325-F07563E7E917
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the resource types.
     *
     * @var resourceTypes[]
     */
    public $resourceTypes;
    protected $_name = [
        'requestId'     => 'RequestId',
        'resourceTypes' => 'ResourceTypes',
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
        if (null !== $this->resourceTypes) {
            $res['ResourceTypes'] = [];
            if (null !== $this->resourceTypes && \is_array($this->resourceTypes)) {
                $n = 0;
                foreach ($this->resourceTypes as $item) {
                    $res['ResourceTypes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListResourceTypesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceTypes'])) {
            if (!empty($map['ResourceTypes'])) {
                $model->resourceTypes = [];
                $n                    = 0;
                foreach ($map['ResourceTypes'] as $item) {
                    $model->resourceTypes[$n++] = null !== $item ? resourceTypes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
