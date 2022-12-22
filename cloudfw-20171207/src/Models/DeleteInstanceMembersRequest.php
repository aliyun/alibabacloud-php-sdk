<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DeleteInstanceMembersRequest extends Model
{
    /**
     * @description The unique identifiers (UID) of members that you want to remove from Cloud Firewall.
     *
     * @example 1234123412341234
     *
     * @var int[]
     */
    public $memberUids;
    protected $_name = [
        'memberUids' => 'MemberUids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->memberUids) {
            $res['MemberUids'] = $this->memberUids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteInstanceMembersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MemberUids'])) {
            if (!empty($map['MemberUids'])) {
                $model->memberUids = $map['MemberUids'];
            }
        }

        return $model;
    }
}
