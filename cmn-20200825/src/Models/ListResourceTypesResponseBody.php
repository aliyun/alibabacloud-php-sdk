<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\ListResourceTypesResponseBody\resourceType;
use AlibabaCloud\Tea\Model;

class ListResourceTypesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resourceType[]
     */
    public $resourceType;
    protected $_name = [
        'requestId'    => 'RequestId',
        'resourceType' => 'ResourceType',
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
        if (null !== $this->resourceType) {
            $res['ResourceType'] = [];
            if (null !== $this->resourceType && \is_array($this->resourceType)) {
                $n = 0;
                foreach ($this->resourceType as $item) {
                    $res['ResourceType'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['ResourceType'])) {
            if (!empty($map['ResourceType'])) {
                $model->resourceType = [];
                $n                   = 0;
                foreach ($map['ResourceType'] as $item) {
                    $model->resourceType[$n++] = null !== $item ? resourceType::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
