<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\ClusterForReq;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imm\V20200930\Models\ClusterForReq\cover\figures;

class cover extends Model
{
    /**
     * @var figures[]
     */
    public $figures;
    protected $_name = [
        'figures' => 'Figures',
    ];

    public function validate()
    {
        if (\is_array($this->figures)) {
            Model::validateArray($this->figures);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->figures) {
            if (\is_array($this->figures)) {
                $res['Figures'] = [];
                $n1 = 0;
                foreach ($this->figures as $item1) {
                    $res['Figures'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Figures'])) {
            if (!empty($map['Figures'])) {
                $model->figures = [];
                $n1 = 0;
                foreach ($map['Figures'] as $item1) {
                    $model->figures[$n1++] = figures::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
