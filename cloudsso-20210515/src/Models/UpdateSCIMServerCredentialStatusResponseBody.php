<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateSCIMServerCredentialStatusResponseBody\SCIMServerCredential;
use AlibabaCloud\Tea\Model;

class UpdateSCIMServerCredentialStatusResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
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
     * @return UpdateSCIMServerCredentialStatusResponseBody
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
