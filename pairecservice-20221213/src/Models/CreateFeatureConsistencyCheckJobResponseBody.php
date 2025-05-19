<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;

class CreateFeatureConsistencyCheckJobResponseBody extends Model
{
    /**
     * @var string
     */
    public $featureConsistencyCheckJobId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'featureConsistencyCheckJobId' => 'FeatureConsistencyCheckJobId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
