<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Tea\Model;

class CreateDomainProxyTokenResponseBody extends Model
{
    /**
     * @example pt_mtohn73423stghoivjmi4jwxxx
     *
     * @var string
     */
    public $domainProxyTokenId;

    /**
     * @example 0441BD79-92F3-53AA-8657-F8CE4A2B912A
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainProxyTokenId' => 'DomainProxyTokenId',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainProxyTokenId) {
            $res['DomainProxyTokenId'] = $this->domainProxyTokenId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDomainProxyTokenResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainProxyTokenId'])) {
            $model->domainProxyTokenId = $map['DomainProxyTokenId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
