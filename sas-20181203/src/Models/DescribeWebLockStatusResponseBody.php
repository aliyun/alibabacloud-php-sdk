<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeWebLockStatusResponseBody extends Model
{
    /**
     * @description The total quota that you purchase for web tamper proofing.
     *
     * @example 32
     *
     * @var int
     */
    public $authCount;

    /**
     * @description The associated tamper proofing quota.
     *
     * @example 2
     *
     * @var int
     */
    public $bindCount;

    /**
     * @description The number of blocked processes.
     *
     * @example 48
     *
     * @var int
     */
    public $blockCount;

    /**
     * @description The number of protected directories.
     *
     * @example 2
     *
     * @var int
     */
    public $dirCount;

    /**
     * @description The timestamp generated when the quota for tamper proofing expires. Unit: millisecond.
     *
     * @example 1688090851000
     *
     * @var int
     */
    public $expireTime;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 0B48AB3C-84FC-424D-A01D-B9270EF46038
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of processes in the whitelist.
     *
     * @example 6
     *
     * @var int
     */
    public $whiteCount;
    protected $_name = [
        'authCount'  => 'AuthCount',
        'bindCount'  => 'BindCount',
        'blockCount' => 'BlockCount',
        'dirCount'   => 'DirCount',
        'expireTime' => 'ExpireTime',
        'requestId'  => 'RequestId',
        'whiteCount' => 'WhiteCount',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DescribeWebLockStatusResponseBody
     */
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
