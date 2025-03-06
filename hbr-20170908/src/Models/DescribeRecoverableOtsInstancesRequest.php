<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class DescribeRecoverableOtsInstancesRequest extends Model
{
    /**
     * @description The name of the Resource Access Management (RAM) role that is created within the source Alibaba Cloud account and assigned to the current Alibaba Cloud account to authorize the current Alibaba Cloud account to back up data across Alibaba Cloud accounts.
     *
     * @example hbrcrossrole
     *
     * @var string
     */
    public $crossAccountRoleName;

    /**
     * @description Specifies whether data is backed up within the same Alibaba Cloud account or across Alibaba Cloud accounts. Valid values:
     *
     *   SELF_ACCOUNT: Data is backed up within the same Alibaba Cloud account.
     *   CROSS_ACCOUNT: Data is backed up across Alibaba Cloud accounts.
     *
     * @example CROSS_ACCOUNT
     *
     * @var string
     */
    public $crossAccountType;

    /**
     * @description The ID of the source Alibaba Cloud account that authorizes the current Alibaba Cloud account to back up data across Alibaba Cloud accounts.
     *
     * @example 1440155109798732
     *
     * @var int
     */
    public $crossAccountUserId;
    protected $_name = [
        'crossAccountRoleName' => 'CrossAccountRoleName',
        'crossAccountType'     => 'CrossAccountType',
        'crossAccountUserId'   => 'CrossAccountUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->crossAccountRoleName) {
            $res['CrossAccountRoleName'] = $this->crossAccountRoleName;
        }
        if (null !== $this->crossAccountType) {
            $res['CrossAccountType'] = $this->crossAccountType;
        }
        if (null !== $this->crossAccountUserId) {
            $res['CrossAccountUserId'] = $this->crossAccountUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRecoverableOtsInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CrossAccountRoleName'])) {
            $model->crossAccountRoleName = $map['CrossAccountRoleName'];
        }
        if (isset($map['CrossAccountType'])) {
            $model->crossAccountType = $map['CrossAccountType'];
        }
        if (isset($map['CrossAccountUserId'])) {
            $model->crossAccountUserId = $map['CrossAccountUserId'];
        }

        return $model;
    }
}
