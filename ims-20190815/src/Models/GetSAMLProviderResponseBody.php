<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\GetSAMLProviderResponseBody\SAMLProvider;
use AlibabaCloud\Tea\Model;

class GetSAMLProviderResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example BAADB995-0C7A-476D-B293-7E94568EEDFB
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the IdP.
     *
     * @var SAMLProvider
     */
    public $SAMLProvider;
    protected $_name = [
        'requestId'    => 'RequestId',
        'SAMLProvider' => 'SAMLProvider',
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
        if (null !== $this->SAMLProvider) {
            $res['SAMLProvider'] = null !== $this->SAMLProvider ? $this->SAMLProvider->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSAMLProviderResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SAMLProvider'])) {
            $model->SAMLProvider = SAMLProvider::fromMap($map['SAMLProvider']);
        }

        return $model;
    }
}
