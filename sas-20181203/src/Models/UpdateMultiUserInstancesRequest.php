<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\UpdateMultiUserInstancesRequest\memberInstances;

class UpdateMultiUserInstancesRequest extends Model
{
    /**
     * @var memberInstances[]
     */
    public $memberInstances;
    protected $_name = [
        'memberInstances' => 'MemberInstances',
    ];

    public function validate()
    {
        if (\is_array($this->memberInstances)) {
            Model::validateArray($this->memberInstances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->memberInstances) {
            if (\is_array($this->memberInstances)) {
                $res['MemberInstances'] = [];
                $n1 = 0;
                foreach ($this->memberInstances as $item1) {
                    $res['MemberInstances'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MemberInstances'])) {
            if (!empty($map['MemberInstances'])) {
                $model->memberInstances = [];
                $n1 = 0;
                foreach ($map['MemberInstances'] as $item1) {
                    $model->memberInstances[$n1] = memberInstances::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
