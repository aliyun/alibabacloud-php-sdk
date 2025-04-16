<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DeleteInstanceMembersRequest extends Model
{
    /**
     * @var int[]
     */
    public $memberUids;
    protected $_name = [
        'memberUids' => 'MemberUids',
    ];

    public function validate()
    {
        if (\is_array($this->memberUids)) {
            Model::validateArray($this->memberUids);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->memberUids) {
            if (\is_array($this->memberUids)) {
                $res['MemberUids'] = [];
                $n1 = 0;
                foreach ($this->memberUids as $item1) {
                    $res['MemberUids'][$n1++] = $item1;
                }
            }
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
        if (isset($map['MemberUids'])) {
            if (!empty($map['MemberUids'])) {
                $model->memberUids = [];
                $n1 = 0;
                foreach ($map['MemberUids'] as $item1) {
                    $model->memberUids[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
