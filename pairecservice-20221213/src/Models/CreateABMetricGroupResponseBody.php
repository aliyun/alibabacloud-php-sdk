<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class CreateABMetricGroupResponseBody extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $ABMetricGroupId;

    /**
     * @example E15A1443-7917-5BE0-AE70-25538ECF398D
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ABMetricGroupId' => 'ABMetricGroupId',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ABMetricGroupId) {
            $res['ABMetricGroupId'] = $this->ABMetricGroupId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateABMetricGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ABMetricGroupId'])) {
            $model->ABMetricGroupId = $map['ABMetricGroupId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
