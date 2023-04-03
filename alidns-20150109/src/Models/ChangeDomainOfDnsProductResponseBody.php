<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class ChangeDomainOfDnsProductResponseBody extends Model
{
    /**
     * @description The original domain name that was bound to the instance. If the value of this parameter is empty, the instance is bound with a domain name for the first time.
     *
     * @example originaldomain.com
     *
     * @var string
     */
    public $originalDomain;

    /**
     * @description The ID of the request.
     *
     * @example 536E9CAD-DB30-4647-AC87-AA5CC38C5382
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'originalDomain' => 'OriginalDomain',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ChangeDomainOfDnsProductResponseBody
     */
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
