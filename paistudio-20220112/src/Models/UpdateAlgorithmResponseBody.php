<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class UpdateAlgorithmResponseBody extends Model
{
    /**
     * @example algo-sidjc8134hv
     *
     * @var string
     */
    public $algorithmId;

    /**
     * @example E7C42CC7-2E85-508A-84F4-923B605FD10F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'algorithmId' => 'AlgorithmId',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithmId) {
            $res['AlgorithmId'] = $this->algorithmId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAlgorithmResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgorithmId'])) {
            $model->algorithmId = $map['AlgorithmId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
