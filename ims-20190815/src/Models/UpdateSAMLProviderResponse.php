<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\UpdateSAMLProviderResponse\SAMLProvider;
use AlibabaCloud\Tea\Model;

class UpdateSAMLProviderResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var SAMLProvider
     */
    public $SAMLProvider;
    protected $_name = [
        'requestId'    => 'RequestId',
        'SAMLProvider' => 'SAMLProvider',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('SAMLProvider', $this->SAMLProvider, true);
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
     * @return UpdateSAMLProviderResponse
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
