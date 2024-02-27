<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\GetInviteStatusResponseBody\data\inviteStatus;

use AlibabaCloud\Tea\Model;

class inviteStatusList extends Model
{
    /**
     * @description The time that Distribution Customer successfully associated with Distributor.</br>
     * This value will be empty if there is no existing association.
     * @example 2018-02-13
     *
     * @var string
     */
    public $associationSuccessTime;

    /**
     * @description Distribution Customer\"s CID
     *
     * @example 1234567890123
     *
     * @var int
     */
    public $cid;

    /**
     * @description The time of email been sent out.
     *
     * @example 2018-02-12
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The parent organization ID.
     *
     * @example 1093238769140523
     *
     * @var string
     */
    public $parentId;

    /**
     * @description Invitation Status:
     * 0 No visit on registration URL
     * 1 Successful Registration
     * 2 Unsuccessful Registration
     * 3 Registration URL have been visited, but no submitted sheet/ticket.
     *
     * @example 2
     *
     * @var int
     */
    public $status;

    /**
     * @description Account Type:
     * - 5 T2 Reseller Partner
     * @example 1
     *
     * @var string
     */
    public $subAccountType;

    /**
     * @description Distribution Customer\"s UID
     *
     * @example 1234567890123
     *
     * @var int
     */
    public $uid;
    protected $_name = [
        'associationSuccessTime' => 'AssociationSuccessTime',
        'cid'                    => 'Cid',
        'gmtCreate'              => 'GmtCreate',
        'parentId'               => 'ParentId',
        'status'                 => 'Status',
        'subAccountType'         => 'SubAccountType',
        'uid'                    => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return inviteStatusList
     */
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
