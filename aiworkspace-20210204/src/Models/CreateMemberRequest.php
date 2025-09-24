<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\CreateMemberRequest\members;

class CreateMemberRequest extends Model
{
    /**
     * @var members[]
     */
    public $members;
    protected $_name = [
        'members' => 'Members',
    ];

    public function validate()
    {
        if (\is_array($this->members)) {
            Model::validateArray($this->members);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->members) {
            if (\is_array($this->members)) {
                $res['Members'] = [];
                $n1 = 0;
                foreach ($this->members as $item1) {
                    $res['Members'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['Members'])) {
            if (!empty($map['Members'])) {
                $model->members = [];
                $n1 = 0;
                foreach ($map['Members'] as $item1) {
                    $model->members[$n1] = members::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
