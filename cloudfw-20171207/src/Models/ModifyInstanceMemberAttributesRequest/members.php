<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\ModifyInstanceMemberAttributesRequest;

use AlibabaCloud\Tea\Model;

class members extends Model
{
    /**
     * @description The remarks of the member in Cloud Firewall.
     *
     * This parameter is required.
     * @example renewal
     *
     * @var string
     */
    public $memberDesc;

    /**
     * @description The UID of the member in Cloud Firewall.
     *
     * This parameter is required.
     * @example 123412341234****
     *
     * @var int
     */
    public $memberUid;
    protected $_name = [
        'memberDesc' => 'MemberDesc',
        'memberUid'  => 'MemberUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->memberDesc) {
            $res['MemberDesc'] = $this->memberDesc;
        }
        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return members
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MemberDesc'])) {
            $model->memberDesc = $map['MemberDesc'];
        }
        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }

        return $model;
    }
}
