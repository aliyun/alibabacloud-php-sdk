<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetOpSensitiveDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $opSensitiveData;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'opSensitiveData' => 'OpSensitiveData',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->opSensitiveData) {
            $res['OpSensitiveData'] = $this->opSensitiveData;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOpSensitiveDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OpSensitiveData'])) {
            $model->opSensitiveData = $map['OpSensitiveData'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
