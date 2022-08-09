<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\DepartmentSaveRequest\departList;
use AlibabaCloud\Tea\Model;

class DepartmentSaveRequest extends Model
{
    /**
     * @var departList[]
     */
    public $departList;
    protected $_name = [
        'departList' => 'depart_list',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->departList) {
            $res['depart_list'] = [];
            if (null !== $this->departList && \is_array($this->departList)) {
                $n = 0;
                foreach ($this->departList as $item) {
                    $res['depart_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DepartmentSaveRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['depart_list'])) {
            if (!empty($map['depart_list'])) {
                $model->departList = [];
                $n                 = 0;
                foreach ($map['depart_list'] as $item) {
                    $model->departList[$n++] = null !== $item ? departList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
