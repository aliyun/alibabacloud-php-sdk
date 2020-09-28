<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetIdentificateValuesResponse\data;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetIdentificateValuesResponse\data\identificateDataInfo\bs;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetIdentificateValuesResponse\data\identificateDataInfo\dj;
use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetIdentificateValuesResponse\data\identificateDataInfo\gj;
use AlibabaCloud\Tea\Model;

class identificateDataInfo extends Model
{
    /**
     * @var dj[]
     */
    public $dj;

    /**
     * @var gj[]
     */
    public $gj;

    /**
     * @var bs[]
     */
    public $bs;
    protected $_name = [
        'dj' => 'Dj',
        'gj' => 'Gj',
        'bs' => 'Bs',
    ];

    public function validate()
    {
        Model::validateRequired('dj', $this->dj, true);
        Model::validateRequired('gj', $this->gj, true);
        Model::validateRequired('bs', $this->bs, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dj) {
            $res['Dj'] = [];
            if (null !== $this->dj && \is_array($this->dj)) {
                $n = 0;
                foreach ($this->dj as $item) {
                    $res['Dj'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->gj) {
            $res['Gj'] = [];
            if (null !== $this->gj && \is_array($this->gj)) {
                $n = 0;
                foreach ($this->gj as $item) {
                    $res['Gj'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->bs) {
            $res['Bs'] = [];
            if (null !== $this->bs && \is_array($this->bs)) {
                $n = 0;
                foreach ($this->bs as $item) {
                    $res['Bs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return identificateDataInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Dj'])) {
            if (!empty($map['Dj'])) {
                $model->dj = [];
                $n         = 0;
                foreach ($map['Dj'] as $item) {
                    $model->dj[$n++] = null !== $item ? dj::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Gj'])) {
            if (!empty($map['Gj'])) {
                $model->gj = [];
                $n         = 0;
                foreach ($map['Gj'] as $item) {
                    $model->gj[$n++] = null !== $item ? gj::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Bs'])) {
            if (!empty($map['Bs'])) {
                $model->bs = [];
                $n         = 0;
                foreach ($map['Bs'] as $item) {
                    $model->bs[$n++] = null !== $item ? bs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
