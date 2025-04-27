<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCInstanceDdosCountResponseBody\ddosCount;

class DescribeRCInstanceDdosCountResponseBody extends Model
{
    /**
     * @var ddosCount
     */
    public $ddosCount;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ddosCount' => 'DdosCount',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->ddosCount) {
            $this->ddosCount->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ddosCount) {
            $res['DdosCount'] = null !== $this->ddosCount ? $this->ddosCount->toArray($noStream) : $this->ddosCount;
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
        if (isset($map['DdosCount'])) {
            $model->ddosCount = ddosCount::fromMap($map['DdosCount']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
