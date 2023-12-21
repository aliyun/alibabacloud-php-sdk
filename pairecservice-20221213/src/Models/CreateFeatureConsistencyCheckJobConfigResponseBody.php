<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class CreateFeatureConsistencyCheckJobConfigResponseBody extends Model
{
    /**
     * @example 4
     *
     * @var string
     */
    public $featureConsistencyCheckJobConfigId;

    /**
     * @example E15A1443-7917-5BE0-AE70-25538ECF398D
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'featureConsistencyCheckJobConfigId' => 'FeatureConsistencyCheckJobConfigId',
        'requestId'                          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->featureConsistencyCheckJobConfigId) {
            $res['FeatureConsistencyCheckJobConfigId'] = $this->featureConsistencyCheckJobConfigId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFeatureConsistencyCheckJobConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FeatureConsistencyCheckJobConfigId'])) {
            $model->featureConsistencyCheckJobConfigId = $map['FeatureConsistencyCheckJobConfigId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
