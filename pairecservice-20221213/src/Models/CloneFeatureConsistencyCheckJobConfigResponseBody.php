<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class CloneFeatureConsistencyCheckJobConfigResponseBody extends Model
{
    /**
     * @example 4
     *
     * @var string
     */
    public $featureConsistencyCheckId;

    /**
     * @example 74D958EF-3598-56FA-8296-FF1575CE43DF
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'featureConsistencyCheckId' => 'FeatureConsistencyCheckId',
        'requestId'                 => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->featureConsistencyCheckId) {
            $res['FeatureConsistencyCheckId'] = $this->featureConsistencyCheckId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CloneFeatureConsistencyCheckJobConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FeatureConsistencyCheckId'])) {
            $model->featureConsistencyCheckId = $map['FeatureConsistencyCheckId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
