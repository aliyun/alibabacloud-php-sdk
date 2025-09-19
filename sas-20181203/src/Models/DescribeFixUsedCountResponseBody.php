<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeFixUsedCountResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $usedCount;

    /**
     * @var int
     */
    public $usedCountCn;

    /**
     * @var int
     */
    public $usedCountSg;
    protected $_name = [
        'requestId' => 'RequestId',
        'usedCount' => 'UsedCount',
        'usedCountCn' => 'UsedCountCn',
        'usedCountSg' => 'UsedCountSg',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->usedCount) {
            $res['UsedCount'] = $this->usedCount;
        }

        if (null !== $this->usedCountCn) {
            $res['UsedCountCn'] = $this->usedCountCn;
        }

        if (null !== $this->usedCountSg) {
            $res['UsedCountSg'] = $this->usedCountSg;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UsedCount'])) {
            $model->usedCount = $map['UsedCount'];
        }

        if (isset($map['UsedCountCn'])) {
            $model->usedCountCn = $map['UsedCountCn'];
        }

        if (isset($map['UsedCountSg'])) {
            $model->usedCountSg = $map['UsedCountSg'];
        }

        return $model;
    }
}
