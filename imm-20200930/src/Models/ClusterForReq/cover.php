<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\ClusterForReq;

use AlibabaCloud\SDK\Imm\V20200930\Models\ClusterForReq\cover\figures;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->figures) {
            $res['Figures'] = [];
            if (null !== $this->figures && \is_array($this->figures)) {
                $n = 0;
                foreach ($this->figures as $item) {
                    $res['Figures'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cover
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Figures'])) {
            if (!empty($map['Figures'])) {
                $model->figures = [];
                $n              = 0;
                foreach ($map['Figures'] as $item) {
                    $model->figures[$n++] = null !== $item ? figures::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
