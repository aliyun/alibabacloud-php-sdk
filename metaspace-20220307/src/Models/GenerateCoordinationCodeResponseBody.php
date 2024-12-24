<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Metaspace\V20220307\Models;

use AlibabaCloud\Tea\Model;

class GenerateCoordinationCodeResponseBody extends Model
{
    /**
     * @example PA3MU***
     *
     * @var string
     */
    public $coordinationCode;

    /**
     * @example AD2D0761-1FE5-549D-B169******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'coordinationCode' => 'CoordinationCode',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coordinationCode) {
            $res['CoordinationCode'] = $this->coordinationCode;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateCoordinationCodeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CoordinationCode'])) {
            $model->coordinationCode = $map['CoordinationCode'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
