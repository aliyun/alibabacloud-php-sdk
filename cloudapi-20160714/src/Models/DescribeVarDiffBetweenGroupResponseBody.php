<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeVarDiffBetweenGroupResponseBody\variableDiffs;
use AlibabaCloud\Tea\Model;

class DescribeVarDiffBetweenGroupResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var variableDiffs
     */
    public $variableDiffs;
    protected $_name = [
        'requestId'     => 'RequestId',
        'variableDiffs' => 'VariableDiffs',
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
        if (null !== $this->variableDiffs) {
            $res['VariableDiffs'] = null !== $this->variableDiffs ? $this->variableDiffs->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVarDiffBetweenGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VariableDiffs'])) {
            $model->variableDiffs = variableDiffs::fromMap($map['VariableDiffs']);
        }

        return $model;
    }
}
