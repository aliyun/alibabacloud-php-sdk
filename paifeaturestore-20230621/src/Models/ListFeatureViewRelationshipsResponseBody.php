<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ListFeatureViewRelationshipsResponseBody\relationships;
use AlibabaCloud\Tea\Model;

class ListFeatureViewRelationshipsResponseBody extends Model
{
    /**
     * @var relationships[]
     */
    public $relationships;

    /**
     * @example 0FBBE454-9BD1-5D8F-9129-D14DB7FAFE0B
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'relationships' => 'Relationships',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->relationships) {
            $res['Relationships'] = [];
            if (null !== $this->relationships && \is_array($this->relationships)) {
                $n = 0;
                foreach ($this->relationships as $item) {
                    $res['Relationships'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFeatureViewRelationshipsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Relationships'])) {
            if (!empty($map['Relationships'])) {
                $model->relationships = [];
                $n                    = 0;
                foreach ($map['Relationships'] as $item) {
                    $model->relationships[$n++] = null !== $item ? relationships::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
