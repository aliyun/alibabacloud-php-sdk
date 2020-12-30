<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models;

use AlibabaCloud\Tea\Model;

class CreateAlgoLibResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $algoLibId;
    protected $_name = [
        'requestId' => 'RequestId',
        'algoLibId' => 'AlgoLibId',
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
        if (null !== $this->algoLibId) {
            $res['AlgoLibId'] = $this->algoLibId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAlgoLibResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AlgoLibId'])) {
            $model->algoLibId = $map['AlgoLibId'];
        }

        return $model;
    }
}
