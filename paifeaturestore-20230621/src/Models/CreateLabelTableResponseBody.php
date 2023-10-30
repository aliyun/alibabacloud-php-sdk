<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Tea\Model;

class CreateLabelTableResponseBody extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $labelTableId;

    /**
     * @example 0FA90B3B-F30A-5C9D-A9FD-8114F8868062
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'labelTableId' => 'LabelTableId',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->labelTableId) {
            $res['LabelTableId'] = $this->labelTableId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLabelTableResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LabelTableId'])) {
            $model->labelTableId = $map['LabelTableId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
