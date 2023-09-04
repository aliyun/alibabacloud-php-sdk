<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\SDK\Cloudsso\V20210515\Models\CreateSCIMServerCredentialResponseBody\SCIMServerCredential;
use AlibabaCloud\Tea\Model;

class CreateSCIMServerCredentialResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 2D2E5180-7ACF-57FF-A56C-26A49ABEBFF7
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the SCIM credential.
     *
     * @var SCIMServerCredential
     */
    public $SCIMServerCredential;
    protected $_name = [
        'requestId'            => 'RequestId',
        'SCIMServerCredential' => 'SCIMServerCredential',
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
        if (null !== $this->SCIMServerCredential) {
            $res['SCIMServerCredential'] = null !== $this->SCIMServerCredential ? $this->SCIMServerCredential->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSCIMServerCredentialResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SCIMServerCredential'])) {
            $model->SCIMServerCredential = SCIMServerCredential::fromMap($map['SCIMServerCredential']);
        }

        return $model;
    }
}
