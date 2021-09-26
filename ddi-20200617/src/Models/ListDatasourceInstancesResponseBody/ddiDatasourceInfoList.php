<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\ListDatasourceInstancesResponseBody;

use AlibabaCloud\SDK\Ddi\V20200617\Models\ListDatasourceInstancesResponseBody\ddiDatasourceInfoList\ddiDatasourceInfo;
use AlibabaCloud\Tea\Model;

class ddiDatasourceInfoList extends Model
{
    /**
     * @var ddiDatasourceInfo[]
     */
    public $ddiDatasourceInfo;
    protected $_name = [
        'ddiDatasourceInfo' => 'DdiDatasourceInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ddiDatasourceInfo) {
            $res['DdiDatasourceInfo'] = [];
            if (null !== $this->ddiDatasourceInfo && \is_array($this->ddiDatasourceInfo)) {
                $n = 0;
                foreach ($this->ddiDatasourceInfo as $item) {
                    $res['DdiDatasourceInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ddiDatasourceInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DdiDatasourceInfo'])) {
            if (!empty($map['DdiDatasourceInfo'])) {
                $model->ddiDatasourceInfo = [];
                $n                        = 0;
                foreach ($map['DdiDatasourceInfo'] as $item) {
                    $model->ddiDatasourceInfo[$n++] = null !== $item ? ddiDatasourceInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
