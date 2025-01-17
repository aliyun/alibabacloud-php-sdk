<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeDomainSecureScoreResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $securityScore;
    protected $_name = [
        'requestId'     => 'RequestId',
        'securityScore' => 'SecurityScore',
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

        if (null !== $this->securityScore) {
            $res['SecurityScore'] = $this->securityScore;
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

        if (isset($map['SecurityScore'])) {
            $model->securityScore = $map['SecurityScore'];
        }

        return $model;
    }
}
