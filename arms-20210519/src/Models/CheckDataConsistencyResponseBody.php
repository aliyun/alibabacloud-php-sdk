<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210519\Models;

use AlibabaCloud\Tea\Model;

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
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CheckDataConsistencyResponseBody
     */
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
