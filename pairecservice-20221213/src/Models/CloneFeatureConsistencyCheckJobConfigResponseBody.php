<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;

class CloneFeatureConsistencyCheckJobConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $featureConsistencyCheckId;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'featureConsistencyCheckId' => 'FeatureConsistencyCheckId',
        'requestId'                 => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
