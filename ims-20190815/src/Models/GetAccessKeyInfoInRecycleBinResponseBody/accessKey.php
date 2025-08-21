<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetAccessKeyInfoInRecycleBinResponseBody;

use AlibabaCloud\Dara\Model;

class accessKey extends Model
{
    /**
     * @var string
     */
    public $accessKeyId;

    /**
     * @var string
     */
    public $createDate;

    /**
     * @var string
     */
    public $deleteDate;

    /**
     * @var string
     */
    public $recycleDate;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userPrincipalName;

    /**
     * @var bool
     */
    public $userRecycled;
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'createDate' => 'CreateDate',
        'deleteDate' => 'DeleteDate',
        'recycleDate' => 'RecycleDate',
        'userId' => 'UserId',
        'userPrincipalName' => 'UserPrincipalName',
        'userRecycled' => 'UserRecycled',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }

        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }

        if (null !== $this->deleteDate) {
            $res['DeleteDate'] = $this->deleteDate;
        }

        if (null !== $this->recycleDate) {
            $res['RecycleDate'] = $this->recycleDate;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->userPrincipalName) {
            $res['UserPrincipalName'] = $this->userPrincipalName;
        }

        if (null !== $this->userRecycled) {
            $res['UserRecycled'] = $this->userRecycled;
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
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }

        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }

        if (isset($map['DeleteDate'])) {
            $model->deleteDate = $map['DeleteDate'];
        }

        if (isset($map['RecycleDate'])) {
            $model->recycleDate = $map['RecycleDate'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['UserPrincipalName'])) {
            $model->userPrincipalName = $map['UserPrincipalName'];
        }

        if (isset($map['UserRecycled'])) {
            $model->userRecycled = $map['UserRecycled'];
        }

        return $model;
    }
}
