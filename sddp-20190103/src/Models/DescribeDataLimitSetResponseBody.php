<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataLimitSetResponseBody\dataLimitSet;

class DescribeDataLimitSetResponseBody extends Model
{
    /**
     * @var dataLimitSet
     */
    public $dataLimitSet;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataLimitSet' => 'DataLimitSet',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->dataLimitSet) {
            $this->dataLimitSet->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataLimitSet) {
            $res['DataLimitSet'] = null !== $this->dataLimitSet ? $this->dataLimitSet->toArray($noStream) : $this->dataLimitSet;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataLimitSet'])) {
            $model->dataLimitSet = dataLimitSet::fromMap($map['DataLimitSet']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
