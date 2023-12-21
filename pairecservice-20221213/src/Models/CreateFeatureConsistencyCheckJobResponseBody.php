<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class CreateFeatureConsistencyCheckJobResponseBody extends Model
{
    /**
     * @example 4
     *
     * @var string
     */
    public $featureConsistencyCheckJobId;

    /**
     * @example 7D59453C-48AA-5FC5-8848-2D373BD1A17F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'featureConsistencyCheckJobId' => 'FeatureConsistencyCheckJobId',
        'requestId'                    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->featureConsistencyCheckJobId) {
            $res['FeatureConsistencyCheckJobId'] = $this->featureConsistencyCheckJobId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFeatureConsistencyCheckJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FeatureConsistencyCheckJobId'])) {
            $model->featureConsistencyCheckJobId = $map['FeatureConsistencyCheckJobId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
