<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Lto\V20210707\Models;

use AlibabaCloud\Dara\Model;

class AgreeMemberAccessRequest extends Model
{
    /**
     * @var string
     */
    public $memberAccountId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'memberAccountId' => 'MemberAccountId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->memberAccountId) {
            $res['MemberAccountId'] = $this->memberAccountId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['MemberAccountId'])) {
            $model->memberAccountId = $map['MemberAccountId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
