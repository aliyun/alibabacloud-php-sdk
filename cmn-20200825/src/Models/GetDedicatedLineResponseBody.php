<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\GetDedicatedLineResponseBody\dedicatedLine;
use AlibabaCloud\Tea\Model;

class GetDedicatedLineResponseBody extends Model
{
    /**
     * @var dedicatedLine
     */
    public $dedicatedLine;

    /**
     * @example 8de935f6-90c7-444e-a2b4-bb4185153435
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dedicatedLine' => 'DedicatedLine',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedLine) {
            $res['DedicatedLine'] = null !== $this->dedicatedLine ? $this->dedicatedLine->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDedicatedLineResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedLine'])) {
            $model->dedicatedLine = dedicatedLine::fromMap($map['DedicatedLine']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
