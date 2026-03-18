<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Dara\Model;

class DescribeExcpetionCountResponseBody extends Model
{
    /**
     * @var int
     */
    public $exceptionIpCount;

    /**
     * @var int
     */
    public $expireTimeCount;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'exceptionIpCount' => 'ExceptionIpCount',
        'expireTimeCount' => 'ExpireTimeCount',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exceptionIpCount) {
            $res['ExceptionIpCount'] = $this->exceptionIpCount;
        }

        if (null !== $this->expireTimeCount) {
            $res['ExpireTimeCount'] = $this->expireTimeCount;
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
        if (isset($map['ExceptionIpCount'])) {
            $model->exceptionIpCount = $map['ExceptionIpCount'];
        }

        if (isset($map['ExpireTimeCount'])) {
            $model->expireTimeCount = $map['ExpireTimeCount'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
