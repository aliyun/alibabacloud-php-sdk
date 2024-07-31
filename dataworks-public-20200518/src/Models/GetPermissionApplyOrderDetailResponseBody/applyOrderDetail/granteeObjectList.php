<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetPermissionApplyOrderDetailResponseBody\applyOrderDetail;

use AlibabaCloud\Tea\Model;

class granteeObjectList extends Model
{
    /**
     * @description The ID of the account that is used to request permissions.
     *
     * @example 267842600408993176
     *
     * @var string
     */
    public $granteeId;

    /**
     * @description The name of the account that is used to request permissions. The name is in the same format as that of the account used to access the MaxCompute project.
     *
     *   If the account is an Alibaba Cloud account, the value is in the ALIYUN$+Account name format.
     *   If the account is a RAM user, the value is in the RAM$+Account name format.
     *
     * @example RAM$dataworks_3h1_1:StsRamUser(StsRamUser)
     *
     * @var string
     */
    public $granteeName;

    /**
     * @description The type of the subject that requests permissions. The value is fixed as 1, which indicates users.
     *
     * @example 1
     *
     * @var int
     */
    public $granteeType;

    /**
     * @description The subtype of the subject that requests permissions. Valid values:
     *
     *   101: production account
     *   103: individual account
     *   105: account that requests permissions for others
     *
     * @example 103
     *
     * @var int
     */
    public $granteeTypeSub;
    protected $_name = [
        'granteeId'      => 'GranteeId',
        'granteeName'    => 'GranteeName',
        'granteeType'    => 'GranteeType',
        'granteeTypeSub' => 'GranteeTypeSub',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->granteeId) {
            $res['GranteeId'] = $this->granteeId;
        }
        if (null !== $this->granteeName) {
            $res['GranteeName'] = $this->granteeName;
        }
        if (null !== $this->granteeType) {
            $res['GranteeType'] = $this->granteeType;
        }
        if (null !== $this->granteeTypeSub) {
            $res['GranteeTypeSub'] = $this->granteeTypeSub;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return granteeObjectList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GranteeId'])) {
            $model->granteeId = $map['GranteeId'];
        }
        if (isset($map['GranteeName'])) {
            $model->granteeName = $map['GranteeName'];
        }
        if (isset($map['GranteeType'])) {
            $model->granteeType = $map['GranteeType'];
        }
        if (isset($map['GranteeTypeSub'])) {
            $model->granteeTypeSub = $map['GranteeTypeSub'];
        }

        return $model;
    }
}
