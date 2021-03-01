<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\QueryApplicationStatusResponseBody\appInfo;

use AlibabaCloud\SDK\Edas\V20170801\Models\QueryApplicationStatusResponseBody\appInfo\groupList\group;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->group) {
            $res['Group'] = [];
            if (null !== $this->group && \is_array($this->group)) {
                $n = 0;
                foreach ($this->group as $item) {
                    $res['Group'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groupList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Group'])) {
            if (!empty($map['Group'])) {
                $model->group = [];
                $n            = 0;
                foreach ($map['Group'] as $item) {
                    $model->group[$n++] = null !== $item ? group::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
