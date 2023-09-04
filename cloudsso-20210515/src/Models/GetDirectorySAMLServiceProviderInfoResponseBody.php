<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetDirectorySAMLServiceProviderInfoResponseBody\SAMLServiceProvider;
use AlibabaCloud\Tea\Model;

class GetDirectorySAMLServiceProviderInfoResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 4632107D-BCE1-5A96-B30B-182EE0709625
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the SP.
     *
     * @var SAMLServiceProvider
     */
    public $SAMLServiceProvider;
    protected $_name = [
        'requestId'           => 'RequestId',
        'SAMLServiceProvider' => 'SAMLServiceProvider',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->SAMLServiceProvider) {
            $res['SAMLServiceProvider'] = null !== $this->SAMLServiceProvider ? $this->SAMLServiceProvider->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDirectorySAMLServiceProviderInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SAMLServiceProvider'])) {
            $model->SAMLServiceProvider = SAMLServiceProvider::fromMap($map['SAMLServiceProvider']);
        }

        return $model;
    }
}
