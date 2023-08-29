<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models\SearchAcrossCatalogResponseBody\tableResult;

use AlibabaCloud\SDK\DataLake\V20200710\Models\HighLight;
use AlibabaCloud\SDK\DataLake\V20200710\Models\Table;
use AlibabaCloud\Tea\Model;

class tables extends Model
{
    /**
     * @var HighLight[]
     */
    public $highLightList;

    /**
     * @var Table
     */
    public $table;
    protected $_name = [
        'highLightList' => 'HighLightList',
        'table'         => 'Table',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->highLightList) {
            $res['HighLightList'] = [];
            if (null !== $this->highLightList && \is_array($this->highLightList)) {
                $n = 0;
                foreach ($this->highLightList as $item) {
                    $res['HighLightList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->table) {
            $res['Table'] = null !== $this->table ? $this->table->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tables
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HighLightList'])) {
            if (!empty($map['HighLightList'])) {
                $model->highLightList = [];
                $n                    = 0;
                foreach ($map['HighLightList'] as $item) {
                    $model->highLightList[$n++] = null !== $item ? HighLight::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Table'])) {
            $model->table = Table::fromMap($map['Table']);
        }

        return $model;
    }
}
