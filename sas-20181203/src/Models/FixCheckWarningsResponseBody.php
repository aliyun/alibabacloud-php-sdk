<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class FixCheckWarningsResponseBody extends Model
{
    /**
     * @description The ID of the baseline risk item that has been fixed by using the Batch Repair feature.
     *
     * @example 52370
     *
     * @var int
     */
    public $batchId;

    /**
     * @description The ID of the request.
     *
     * @example 76C1D7FD-DB1E-45EA-B804-3FBD9A1DD9C0
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'batchId'   => 'BatchId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchId) {
            $res['BatchId'] = $this->batchId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FixCheckWarningsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchId'])) {
            $model->batchId = $map['BatchId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
