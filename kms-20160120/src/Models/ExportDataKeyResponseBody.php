<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class ExportDataKeyResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $exportedDataKey;

    /**
     * @var string
     */
    public $keyId;

    /**
     * @var string
     */
    public $keyVersionId;
    protected $_name = [
        'requestId'       => 'RequestId',
        'exportedDataKey' => 'ExportedDataKey',
        'keyId'           => 'KeyId',
        'keyVersionId'    => 'KeyVersionId',
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
        if (null !== $this->exportedDataKey) {
            $res['ExportedDataKey'] = $this->exportedDataKey;
        }
        if (null !== $this->keyId) {
            $res['KeyId'] = $this->keyId;
        }
        if (null !== $this->keyVersionId) {
            $res['KeyVersionId'] = $this->keyVersionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportDataKeyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ExportedDataKey'])) {
            $model->exportedDataKey = $map['ExportedDataKey'];
        }
        if (isset($map['KeyId'])) {
            $model->keyId = $map['KeyId'];
        }
        if (isset($map['KeyVersionId'])) {
            $model->keyVersionId = $map['KeyVersionId'];
        }

        return $model;
    }
}
