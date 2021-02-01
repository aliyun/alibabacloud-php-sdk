<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\CheckScaleOutBalancedResponseBody;

use AlibabaCloud\SDK\Clickhouse\V20191111\Models\CheckScaleOutBalancedResponseBody\tableDetails\tableDetail;
use AlibabaCloud\Tea\Model;

class tableDetails extends Model
{
    /**
     * @var tableDetail[]
     */
    public $tableDetail;
    protected $_name = [
        'tableDetail' => 'TableDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tableDetail) {
            $res['TableDetail'] = [];
            if (null !== $this->tableDetail && \is_array($this->tableDetail)) {
                $n = 0;
                foreach ($this->tableDetail as $item) {
                    $res['TableDetail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tableDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TableDetail'])) {
            if (!empty($map['TableDetail'])) {
                $model->tableDetail = [];
                $n                  = 0;
                foreach ($map['TableDetail'] as $item) {
                    $model->tableDetail[$n++] = null !== $item ? tableDetail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
