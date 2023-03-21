<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeHoneyPotAuthResponseBody extends Model
{
    /**
     * @var int
     */
    public $honeyPotAuthCount;

    /**
     * @var int
     */
    public $honeyPotCount;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'honeyPotAuthCount' => 'HoneyPotAuthCount',
        'honeyPotCount'     => 'HoneyPotCount',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->honeyPotAuthCount) {
            $res['HoneyPotAuthCount'] = $this->honeyPotAuthCount;
        }
        if (null !== $this->honeyPotCount) {
            $res['HoneyPotCount'] = $this->honeyPotCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHoneyPotAuthResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HoneyPotAuthCount'])) {
            $model->honeyPotAuthCount = $map['HoneyPotAuthCount'];
        }
        if (isset($map['HoneyPotCount'])) {
            $model->honeyPotCount = $map['HoneyPotCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
