<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeWebLockStatusResponseBody extends Model
{
    /**
     * @var int
     */
    public $authCount;

    /**
     * @var int
     */
    public $bindCount;

    /**
     * @var int
     */
    public $blockCount;

    /**
     * @var int
     */
    public $dirCount;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $whiteCount;
    protected $_name = [
        'authCount' => 'AuthCount',
        'bindCount' => 'BindCount',
        'blockCount' => 'BlockCount',
        'dirCount' => 'DirCount',
        'expireTime' => 'ExpireTime',
        'requestId' => 'RequestId',
        'whiteCount' => 'WhiteCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authCount) {
            $res['AuthCount'] = $this->authCount;
        }

        if (null !== $this->bindCount) {
            $res['BindCount'] = $this->bindCount;
        }

        if (null !== $this->blockCount) {
            $res['BlockCount'] = $this->blockCount;
        }

        if (null !== $this->dirCount) {
            $res['DirCount'] = $this->dirCount;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->whiteCount) {
            $res['WhiteCount'] = $this->whiteCount;
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
        if (isset($map['AuthCount'])) {
            $model->authCount = $map['AuthCount'];
        }

        if (isset($map['BindCount'])) {
            $model->bindCount = $map['BindCount'];
        }

        if (isset($map['BlockCount'])) {
            $model->blockCount = $map['BlockCount'];
        }

        if (isset($map['DirCount'])) {
            $model->dirCount = $map['DirCount'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['WhiteCount'])) {
            $model->whiteCount = $map['WhiteCount'];
        }

        return $model;
    }
}
