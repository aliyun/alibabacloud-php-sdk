<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetOutbounNumListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetOutbounNumListResponseBody\data\num;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\GetOutbounNumListResponseBody\data\numGroup;

class data extends Model
{
    /**
     * @var num[]
     */
    public $num;
    /**
     * @var numGroup[]
     */
    public $numGroup;
    protected $_name = [
        'num'      => 'Num',
        'numGroup' => 'NumGroup',
    ];

    public function validate()
    {
        if (\is_array($this->num)) {
            Model::validateArray($this->num);
        }
        if (\is_array($this->numGroup)) {
            Model::validateArray($this->numGroup);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->num) {
            if (\is_array($this->num)) {
                $res['Num'] = [];
                $n1         = 0;
                foreach ($this->num as $item1) {
                    $res['Num'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->numGroup) {
            if (\is_array($this->numGroup)) {
                $res['NumGroup'] = [];
                $n1              = 0;
                foreach ($this->numGroup as $item1) {
                    $res['NumGroup'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Num'])) {
            if (!empty($map['Num'])) {
                $model->num = [];
                $n1         = 0;
                foreach ($map['Num'] as $item1) {
                    $model->num[$n1++] = num::fromMap($item1);
                }
            }
        }

        if (isset($map['NumGroup'])) {
            if (!empty($map['NumGroup'])) {
                $model->numGroup = [];
                $n1              = 0;
                foreach ($map['NumGroup'] as $item1) {
                    $model->numGroup[$n1++] = numGroup::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
