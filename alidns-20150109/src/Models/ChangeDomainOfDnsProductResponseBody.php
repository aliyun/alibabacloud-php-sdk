<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;

class ChangeDomainOfDnsProductResponseBody extends Model
{
    /**
     * @var string
     */
    public $originalDomain;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'originalDomain' => 'OriginalDomain',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->originalDomain) {
            $res['OriginalDomain'] = $this->originalDomain;
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
        if (isset($map['OriginalDomain'])) {
            $model->originalDomain = $map['OriginalDomain'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
