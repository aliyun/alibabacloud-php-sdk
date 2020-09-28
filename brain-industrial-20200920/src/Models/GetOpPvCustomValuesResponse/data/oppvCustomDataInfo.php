<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetOpPvCustomValuesResponse\data;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetOpPvCustomValuesResponse\data\oppvCustomDataInfo\opzdy;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetOpPvCustomValuesResponse\data\oppvCustomDataInfo\pvzdy;
use AlibabaCloud\Tea\Model;

class oppvCustomDataInfo extends Model
{
    /**
     * @var opzdy[]
     */
    public $opzdy;

    /**
     * @var pvzdy[]
     */
    public $pvzdy;
    protected $_name = [
        'opzdy' => 'Opzdy',
        'pvzdy' => 'Pvzdy',
    ];

    public function validate()
    {
        Model::validateRequired('opzdy', $this->opzdy, true);
        Model::validateRequired('pvzdy', $this->pvzdy, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->opzdy) {
            $res['Opzdy'] = [];
            if (null !== $this->opzdy && \is_array($this->opzdy)) {
                $n = 0;
                foreach ($this->opzdy as $item) {
                    $res['Opzdy'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pvzdy) {
            $res['Pvzdy'] = [];
            if (null !== $this->pvzdy && \is_array($this->pvzdy)) {
                $n = 0;
                foreach ($this->pvzdy as $item) {
                    $res['Pvzdy'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return oppvCustomDataInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Opzdy'])) {
            if (!empty($map['Opzdy'])) {
                $model->opzdy = [];
                $n            = 0;
                foreach ($map['Opzdy'] as $item) {
                    $model->opzdy[$n++] = null !== $item ? opzdy::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Pvzdy'])) {
            if (!empty($map['Pvzdy'])) {
                $model->pvzdy = [];
                $n            = 0;
                foreach ($map['Pvzdy'] as $item) {
                    $model->pvzdy[$n++] = null !== $item ? pvzdy::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
