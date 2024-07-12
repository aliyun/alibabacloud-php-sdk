<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oosops\V20190601\Models;

use AlibabaCloud\Tea\Model;

class DeleteFailureMsgRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $operation;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $requestFingerprint;
    protected $_name = [
        'operation'          => 'Operation',
        'requestFingerprint' => 'RequestFingerprint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }
        if (null !== $this->requestFingerprint) {
            $res['RequestFingerprint'] = $this->requestFingerprint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteFailureMsgRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }
        if (isset($map['RequestFingerprint'])) {
            $model->requestFingerprint = $map['RequestFingerprint'];
        }

        return $model;
    }
}
