<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\GetUserInRecycleBinResponseBody;

use AlibabaCloud\Dara\Model;

class user extends Model
{
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
    public $displayName;

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
    protected $_name = [
        'createDate' => 'CreateDate',
        'deleteDate' => 'DeleteDate',
        'displayName' => 'DisplayName',
        'recycleDate' => 'RecycleDate',
        'userId' => 'UserId',
        'userPrincipalName' => 'UserPrincipalName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }

        if (null !== $this->deleteDate) {
            $res['DeleteDate'] = $this->deleteDate;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }

        if (isset($map['DeleteDate'])) {
            $model->deleteDate = $map['DeleteDate'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
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

        return $model;
    }
}
