<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CreateRewriteUrlRuleResponseBody extends Model
{
    /**
     * @description Configuration ID.
     *
     * @example 39237781679****
     *
     * @var int
     */
    public $configId;

    /**
     * @description Request ID.
     *
     * @example CB1A380B-09F0-41BB-280B-72F8FD6DA2FE
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'configId' => 'ConfigId',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRewriteUrlRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
