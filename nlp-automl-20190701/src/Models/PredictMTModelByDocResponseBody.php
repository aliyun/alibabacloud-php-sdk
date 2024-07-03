<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlpautoml\V20190701\Models;

use AlibabaCloud\Tea\Model;

class PredictMTModelByDocResponseBody extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $docId;

    /**
     * @example 86D18195-D89C-4C8C-9DC4-5FCE789CE6D5
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'docId'     => 'DocId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->docId) {
            $res['DocId'] = $this->docId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PredictMTModelByDocResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DocId'])) {
            $model->docId = $map['DocId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
