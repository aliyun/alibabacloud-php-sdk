<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\AddInstanceMembersRequest;

use AlibabaCloud\Dara\Model;

class members extends Model
{
    /**
     * @var string
     */
    public $memberDesc;

    /**
     * @var int
     */
    public $memberUid;
    protected $_name = [
        'memberDesc' => 'MemberDesc',
        'memberUid' => 'MemberUid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
