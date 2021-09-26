<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataLimitSetResponseBody\dataLimitSet;
use AlibabaCloud\Tea\Model;

class DescribeDataLimitSetResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var dataLimitSet
     */
    public $dataLimitSet;
    protected $_name = [
        'requestId'    => 'RequestId',
        'dataLimitSet' => 'DataLimitSet',
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
        if (null !== $this->dataLimitSet) {
            $res['DataLimitSet'] = null !== $this->dataLimitSet ? $this->dataLimitSet->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDataLimitSetResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DataLimitSet'])) {
            $model->dataLimitSet = dataLimitSet::fromMap($map['DataLimitSet']);
        }

        return $model;
    }
}
