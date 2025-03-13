<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class GenerateCoordinationCodeResponseBody extends Model
{
    /**
     * @example CSHGDK
     *
     * @var string
     */
    public $coordinatorCode;

    /**
     * @example 1A923337-44D9-5CAD-9A53-95084BD4****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'coordinatorCode' => 'CoordinatorCode',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coordinatorCode) {
            $res['CoordinatorCode'] = $this->coordinatorCode;
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
        if (isset($map['CoordinatorCode'])) {
            $model->coordinatorCode = $map['CoordinatorCode'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
