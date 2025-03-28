<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetPermissionApplyOrderDetailResponseBody\applyOrderDetail;

use AlibabaCloud\Dara\Model;

class granteeObjectList extends Model
{
    /**
     * @var string
     */
    public $granteeId;

    /**
     * @var string
     */
    public $granteeName;

    /**
     * @var int
     */
    public $granteeType;

    /**
     * @var int
     */
    public $granteeTypeSub;
    protected $_name = [
        'granteeId' => 'GranteeId',
        'granteeName' => 'GranteeName',
        'granteeType' => 'GranteeType',
        'granteeTypeSub' => 'GranteeTypeSub',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
