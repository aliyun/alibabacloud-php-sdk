<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210422\Models;

use AlibabaCloud\Dara\Model;

class CheckDataConsistencyResponseBody extends Model
{
    /**
     * @var bool
     */
    public $isDataConsistency;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'isDataConsistency' => 'IsDataConsistency',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isDataConsistency) {
            $res['IsDataConsistency'] = $this->isDataConsistency;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['IsDataConsistency'])) {
            $model->isDataConsistency = $map['IsDataConsistency'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
