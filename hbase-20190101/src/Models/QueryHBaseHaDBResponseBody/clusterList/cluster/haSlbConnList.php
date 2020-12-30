<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\QueryHBaseHaDBResponseBody\clusterList\cluster;

use AlibabaCloud\SDK\HBase\V20190101\Models\QueryHBaseHaDBResponseBody\clusterList\cluster\haSlbConnList\haSlbConn;
use AlibabaCloud\Tea\Model;

class haSlbConnList extends Model
{
    /**
     * @var haSlbConn[]
     */
    public $haSlbConn;
    protected $_name = [
        'haSlbConn' => 'HaSlbConn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->haSlbConn) {
            $res['HaSlbConn'] = [];
            if (null !== $this->haSlbConn && \is_array($this->haSlbConn)) {
                $n = 0;
                foreach ($this->haSlbConn as $item) {
                    $res['HaSlbConn'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return haSlbConnList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HaSlbConn'])) {
            if (!empty($map['HaSlbConn'])) {
                $model->haSlbConn = [];
                $n                = 0;
                foreach ($map['HaSlbConn'] as $item) {
                    $model->haSlbConn[$n++] = null !== $item ? haSlbConn::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
