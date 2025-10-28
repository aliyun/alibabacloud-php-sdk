<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\QueryApplicationStatusResponseBody\appInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\QueryApplicationStatusResponseBody\appInfo\groupList\group;

class groupList extends Model
{
    /**
     * @var group[]
     */
    public $group;
    protected $_name = [
        'group' => 'Group',
    ];

    public function validate()
    {
        if (\is_array($this->group)) {
            Model::validateArray($this->group);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->group) {
            if (\is_array($this->group)) {
                $res['Group'] = [];
                $n1 = 0;
                foreach ($this->group as $item1) {
                    $res['Group'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Group'])) {
            if (!empty($map['Group'])) {
                $model->group = [];
                $n1 = 0;
                foreach ($map['Group'] as $item1) {
                    $model->group[$n1] = group::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
