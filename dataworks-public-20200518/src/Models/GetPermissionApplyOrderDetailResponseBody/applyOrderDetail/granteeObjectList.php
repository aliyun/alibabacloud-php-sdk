<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetPermissionApplyOrderDetailResponseBody\applyOrderDetail;

use AlibabaCloud\Tea\Model;

class granteeObjectList extends Model
{
    /**
     * @var int
     */
    public $granteeType;

    /**
     * @var int
     */
    public $granteeTypeSub;

    /**
     * @var string
     */
    public $granteeName;

    /**
     * @var string
     */
    public $granteeId;
    protected $_name = [
        'granteeType'    => 'GranteeType',
        'granteeTypeSub' => 'GranteeTypeSub',
        'granteeName'    => 'GranteeName',
        'granteeId'      => 'GranteeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->granteeType) {
            $res['GranteeType'] = $this->granteeType;
        }
        if (null !== $this->granteeTypeSub) {
            $res['GranteeTypeSub'] = $this->granteeTypeSub;
        }
        if (null !== $this->granteeName) {
            $res['GranteeName'] = $this->granteeName;
        }
        if (null !== $this->granteeId) {
            $res['GranteeId'] = $this->granteeId;
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
        if (isset($map['GranteeType'])) {
            $model->granteeType = $map['GranteeType'];
        }
        if (isset($map['GranteeTypeSub'])) {
            $model->granteeTypeSub = $map['GranteeTypeSub'];
        }
        if (isset($map['GranteeName'])) {
            $model->granteeName = $map['GranteeName'];
        }
        if (isset($map['GranteeId'])) {
            $model->granteeId = $map['GranteeId'];
        }

        return $model;
    }
}
