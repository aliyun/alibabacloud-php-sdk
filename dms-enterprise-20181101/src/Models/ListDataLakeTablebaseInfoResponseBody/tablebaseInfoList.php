<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDataLakeTablebaseInfoResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\DLTablebaseInfo;
use AlibabaCloud\Tea\Model;

class tablebaseInfoList extends Model
{
    /**
     * @var DLTablebaseInfo[]
     */
    public $tablebaseInfo;
    protected $_name = [
        'tablebaseInfo' => 'TablebaseInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tablebaseInfo) {
            $res['TablebaseInfo'] = [];
            if (null !== $this->tablebaseInfo && \is_array($this->tablebaseInfo)) {
                $n = 0;
                foreach ($this->tablebaseInfo as $item) {
                    $res['TablebaseInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tablebaseInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TablebaseInfo'])) {
            if (!empty($map['TablebaseInfo'])) {
                $model->tablebaseInfo = [];
                $n                    = 0;
                foreach ($map['TablebaseInfo'] as $item) {
                    $model->tablebaseInfo[$n++] = null !== $item ? DLTablebaseInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
