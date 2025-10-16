<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeInvadeEventStatisticResponseBody extends Model
{
    /**
     * @var int
     */
    public $highOpenEventCnt;

    /**
     * @var int
     */
    public $lowOpenEventCnt;

    /**
     * @var int
     */
    public $middleOpenEventCnt;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalOpenEventCnt;
    protected $_name = [
        'highOpenEventCnt' => 'HighOpenEventCnt',
        'lowOpenEventCnt' => 'LowOpenEventCnt',
        'middleOpenEventCnt' => 'MiddleOpenEventCnt',
        'requestId' => 'RequestId',
        'totalOpenEventCnt' => 'TotalOpenEventCnt',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->highOpenEventCnt) {
            $res['HighOpenEventCnt'] = $this->highOpenEventCnt;
        }

        if (null !== $this->lowOpenEventCnt) {
            $res['LowOpenEventCnt'] = $this->lowOpenEventCnt;
        }

        if (null !== $this->middleOpenEventCnt) {
            $res['MiddleOpenEventCnt'] = $this->middleOpenEventCnt;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalOpenEventCnt) {
            $res['TotalOpenEventCnt'] = $this->totalOpenEventCnt;
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
        if (isset($map['HighOpenEventCnt'])) {
            $model->highOpenEventCnt = $map['HighOpenEventCnt'];
        }

        if (isset($map['LowOpenEventCnt'])) {
            $model->lowOpenEventCnt = $map['LowOpenEventCnt'];
        }

        if (isset($map['MiddleOpenEventCnt'])) {
            $model->middleOpenEventCnt = $map['MiddleOpenEventCnt'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalOpenEventCnt'])) {
            $model->totalOpenEventCnt = $map['TotalOpenEventCnt'];
        }

        return $model;
    }
}
