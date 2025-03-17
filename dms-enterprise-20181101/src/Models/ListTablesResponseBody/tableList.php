<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTablesResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTablesResponseBody\tableList\table;
use AlibabaCloud\Tea\Model;

class tableList extends Model
{
    /**
     * @var table[]
     */
    public $table;
    protected $_name = [
        'table' => 'Table',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->table) {
            $res['Table'] = [];
            if (null !== $this->table && \is_array($this->table)) {
                $n = 0;
                foreach ($this->table as $item) {
                    $res['Table'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tableList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Table'])) {
            if (!empty($map['Table'])) {
                $model->table = [];
                $n = 0;
                foreach ($map['Table'] as $item) {
                    $model->table[$n++] = null !== $item ? table::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
