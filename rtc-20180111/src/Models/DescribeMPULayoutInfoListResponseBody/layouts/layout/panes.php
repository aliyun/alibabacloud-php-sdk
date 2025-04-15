<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeMPULayoutInfoListResponseBody\layouts\layout;

use AlibabaCloud\Dara\Model;

class panes extends Model
{
    /**
     * @var panes\panes[]
     */
    public $panes;
    protected $_name = [
        'panes' => 'Panes',
    ];

    public function validate()
    {
        if (\is_array($this->panes)) {
            Model::validateArray($this->panes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->panes) {
            if (\is_array($this->panes)) {
                $res['Panes'] = [];
                $n1 = 0;
                foreach ($this->panes as $item1) {
                    $res['Panes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Panes'])) {
            if (!empty($map['Panes'])) {
                $model->panes = [];
                $n1 = 0;
                foreach ($map['Panes'] as $item1) {
                    $model->panes[$n1++] = panes\panes::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
