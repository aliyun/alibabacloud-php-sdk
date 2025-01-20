<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeDirQuotasResponseBody\dirQuotaInfos;

use AlibabaCloud\Dara\Model;

class userQuotaInfos extends Model
{
    /**
     * @var int
     */
    public $fileCountLimit;
    /**
     * @var int
     */
    public $fileCountReal;
    /**
     * @var string
     */
    public $quotaType;
    /**
     * @var int
     */
    public $sizeLimit;
    /**
     * @var int
     */
    public $sizeReal;
    /**
     * @var int
     */
    public $sizeRealInByte;
    /**
     * @var string
     */
    public $userId;
    /**
     * @var string
     */
    public $userType;
    protected $_name = [
        'fileCountLimit' => 'FileCountLimit',
        'fileCountReal'  => 'FileCountReal',
        'quotaType'      => 'QuotaType',
        'sizeLimit'      => 'SizeLimit',
        'sizeReal'       => 'SizeReal',
        'sizeRealInByte' => 'SizeRealInByte',
        'userId'         => 'UserId',
        'userType'       => 'UserType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileCountLimit) {
            $res['FileCountLimit'] = $this->fileCountLimit;
        }

        if (null !== $this->fileCountReal) {
            $res['FileCountReal'] = $this->fileCountReal;
        }

        if (null !== $this->quotaType) {
            $res['QuotaType'] = $this->quotaType;
        }

        if (null !== $this->sizeLimit) {
            $res['SizeLimit'] = $this->sizeLimit;
        }

        if (null !== $this->sizeReal) {
            $res['SizeReal'] = $this->sizeReal;
        }

        if (null !== $this->sizeRealInByte) {
            $res['SizeRealInByte'] = $this->sizeRealInByte;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
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
        if (isset($map['FileCountLimit'])) {
            $model->fileCountLimit = $map['FileCountLimit'];
        }

        if (isset($map['FileCountReal'])) {
            $model->fileCountReal = $map['FileCountReal'];
        }

        if (isset($map['QuotaType'])) {
            $model->quotaType = $map['QuotaType'];
        }

        if (isset($map['SizeLimit'])) {
            $model->sizeLimit = $map['SizeLimit'];
        }

        if (isset($map['SizeReal'])) {
            $model->sizeReal = $map['SizeReal'];
        }

        if (isset($map['SizeRealInByte'])) {
            $model->sizeRealInByte = $map['SizeRealInByte'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
