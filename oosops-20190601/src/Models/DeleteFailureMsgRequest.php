<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oosops\V20190601\Models;

use AlibabaCloud\Dara\Model;

class DeleteFailureMsgRequest extends Model
{
    /**
     * @var string
     */
    public $operation;
    /**
     * @var string
     */
    public $requestFingerprint;
    protected $_name = [
        'operation'          => 'Operation',
        'requestFingerprint' => 'RequestFingerprint',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
