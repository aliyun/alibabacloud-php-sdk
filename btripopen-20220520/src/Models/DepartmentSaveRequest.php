<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\DepartmentSaveRequest\departList;

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
        if (\is_array($this->departList)) {
            Model::validateArray($this->departList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->departList) {
            if (\is_array($this->departList)) {
                $res['depart_list'] = [];
                $n1 = 0;
                foreach ($this->departList as $item1) {
                    $res['depart_list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['depart_list'])) {
            if (!empty($map['depart_list'])) {
                $model->departList = [];
                $n1 = 0;
                foreach ($map['depart_list'] as $item1) {
                    $model->departList[$n1++] = departList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
