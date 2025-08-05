<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Dara\Model;

class GetSuppressionListLevelResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $suppressionListLevel;
    protected $_name = [
        'requestId' => 'RequestId',
        'suppressionListLevel' => 'SuppressionListLevel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->suppressionListLevel) {
            $res['SuppressionListLevel'] = $this->suppressionListLevel;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SuppressionListLevel'])) {
            $model->suppressionListLevel = $map['SuppressionListLevel'];
        }

        return $model;
    }
}
