<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class CreateOsVersionResponseBody extends Model
{
    /**
     * @example osVersionId
     *
     * @var string
     */
    public $osVersionId;

    /**
     * @example requestId
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'osVersionId' => 'OsVersionId',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->osVersionId) {
            $res['OsVersionId'] = $this->osVersionId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOsVersionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OsVersionId'])) {
            $model->osVersionId = $map['OsVersionId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
