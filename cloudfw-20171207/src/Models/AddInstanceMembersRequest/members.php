<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\AddInstanceMembersRequest;

use AlibabaCloud\Tea\Model;

class members extends Model
{
    /**
     * @description The remarks of member that you want to add to Cloud Firewall. The remarks must be 1 to 256 characters in length.
     *
     * @example renewal
     *
     * @var string
     */
    public $memberDesc;

    /**
     * @description The UID of member that you want to add to Cloud Firewall.
     *
     * This parameter is required.
     * @example 258039427902****
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
