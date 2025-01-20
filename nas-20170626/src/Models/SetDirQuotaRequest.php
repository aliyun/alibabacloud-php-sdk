<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Dara\Model;

class SetDirQuotaRequest extends Model
{
    /**
     * @var int
     */
    public $fileCountLimit;
    /**
     * @var string
     */
    public $fileSystemId;
    /**
     * @var string
     */
    public $path;
    /**
     * @var string
     */
    public $quotaType;
    /**
     * @var int
     */
    public $sizeLimit;
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
        'fileSystemId'   => 'FileSystemId',
        'path'           => 'Path',
        'quotaType'      => 'QuotaType',
        'sizeLimit'      => 'SizeLimit',
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

        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->quotaType) {
            $res['QuotaType'] = $this->quotaType;
        }

        if (null !== $this->sizeLimit) {
            $res['SizeLimit'] = $this->sizeLimit;
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

        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['QuotaType'])) {
            $model->quotaType = $map['QuotaType'];
        }

        if (isset($map['SizeLimit'])) {
            $model->sizeLimit = $map['SizeLimit'];
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
