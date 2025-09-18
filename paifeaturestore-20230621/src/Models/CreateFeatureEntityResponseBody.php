<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Dara\Model;

class CreateFeatureEntityResponseBody extends Model
{
    /**
     * @var string
     */
    public $featureEntityId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'featureEntityId' => 'FeatureEntityId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->featureEntityId) {
            $res['FeatureEntityId'] = $this->featureEntityId;
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
        if (isset($map['FeatureEntityId'])) {
            $model->featureEntityId = $map['FeatureEntityId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
