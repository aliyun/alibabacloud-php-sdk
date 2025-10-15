<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\CreateApplicationTokenResponseBody\applicationTokens;

class CreateApplicationTokenResponseBody extends Model
{
    /**
     * @var applicationTokens
     */
    public $applicationTokens;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'applicationTokens' => 'ApplicationTokens',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->applicationTokens) {
            $this->applicationTokens->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationTokens) {
            $res['ApplicationTokens'] = null !== $this->applicationTokens ? $this->applicationTokens->toArray($noStream) : $this->applicationTokens;
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
        if (isset($map['ApplicationTokens'])) {
            $model->applicationTokens = applicationTokens::fromMap($map['ApplicationTokens']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
