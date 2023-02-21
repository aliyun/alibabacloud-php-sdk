<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcIcClearAccountResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $leader;

    /**
     * @var string
     */
    public $member;
    protected $_name = [
        'leader' => 'Leader',
        'member' => 'Member',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->leader) {
            $res['Leader'] = $this->leader;
        }
        if (null !== $this->member) {
            $res['Member'] = $this->member;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Leader'])) {
            $model->leader = $map['Leader'];
        }
        if (isset($map['Member'])) {
            $model->member = $map['Member'];
        }

        return $model;
    }
}
