<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\GetInviteStatusResponseBody\data\inviteStatus;

use AlibabaCloud\Dara\Model;

class inviteStatusList extends Model
{
    /**
     * @var string
     */
    public $associationSuccessTime;

    /**
     * @var int
     */
    public $cid;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $parentId;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $subAccountType;

    /**
     * @var int
     */
    public $uid;
    protected $_name = [
        'associationSuccessTime' => 'AssociationSuccessTime',
        'cid' => 'Cid',
        'gmtCreate' => 'GmtCreate',
        'parentId' => 'ParentId',
        'status' => 'Status',
        'subAccountType' => 'SubAccountType',
        'uid' => 'Uid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->associationSuccessTime) {
            $res['AssociationSuccessTime'] = $this->associationSuccessTime;
        }

        if (null !== $this->cid) {
            $res['Cid'] = $this->cid;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->subAccountType) {
            $res['SubAccountType'] = $this->subAccountType;
        }

        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
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
        if (isset($map['AssociationSuccessTime'])) {
            $model->associationSuccessTime = $map['AssociationSuccessTime'];
        }

        if (isset($map['Cid'])) {
            $model->cid = $map['Cid'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubAccountType'])) {
            $model->subAccountType = $map['SubAccountType'];
        }

        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
