<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDirQuotasResponseBody\dirQuotaInfos;

use AlibabaCloud\Tea\Model;

class userQuotaInfos extends Model
{
    /**
     * @var int
     */
    public $fileCountReal;

    /**
     * @var string
     */
    public $userType;

    /**
     * @var int
     */
    public $fileCountLimit;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var int
     */
    public $sizeLimit;

    /**
     * @var string
     */
    public $quotaType;

    /**
     * @var int
     */
    public $sizeReal;
    protected $_name = [
        'fileCountReal'  => 'FileCountReal',
        'userType'       => 'UserType',
        'fileCountLimit' => 'FileCountLimit',
        'userId'         => 'UserId',
        'sizeLimit'      => 'SizeLimit',
        'quotaType'      => 'QuotaType',
        'sizeReal'       => 'SizeReal',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileCountReal) {
            $res['FileCountReal'] = $this->fileCountReal;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }
        if (null !== $this->fileCountLimit) {
            $res['FileCountLimit'] = $this->fileCountLimit;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->sizeLimit) {
            $res['SizeLimit'] = $this->sizeLimit;
        }
        if (null !== $this->quotaType) {
            $res['QuotaType'] = $this->quotaType;
        }
        if (null !== $this->sizeReal) {
            $res['SizeReal'] = $this->sizeReal;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userQuotaInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileCountReal'])) {
            $model->fileCountReal = $map['FileCountReal'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }
        if (isset($map['FileCountLimit'])) {
            $model->fileCountLimit = $map['FileCountLimit'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['SizeLimit'])) {
            $model->sizeLimit = $map['SizeLimit'];
        }
        if (isset($map['QuotaType'])) {
            $model->quotaType = $map['QuotaType'];
        }
        if (isset($map['SizeReal'])) {
            $model->sizeReal = $map['SizeReal'];
        }

        return $model;
    }
}
