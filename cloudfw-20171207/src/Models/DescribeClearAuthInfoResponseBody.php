<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeClearAuthInfoResponseBody extends Model
{
    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $leftTimes;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'endTime' => 'EndTime',
        'leftTimes' => 'LeftTimes',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->leftTimes) {
            $res['LeftTimes'] = $this->leftTimes;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['LeftTimes'])) {
            $model->leftTimes = $map['LeftTimes'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
