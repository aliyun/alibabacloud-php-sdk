<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\QueryHBaseHaDBResponseBody\clusterList\cluster;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\HBase\V20190101\Models\QueryHBaseHaDBResponseBody\clusterList\cluster\haSlbConnList\haSlbConn;

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
        if (\is_array($this->haSlbConn)) {
            Model::validateArray($this->haSlbConn);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->haSlbConn) {
            if (\is_array($this->haSlbConn)) {
                $res['HaSlbConn'] = [];
                $n1 = 0;
                foreach ($this->haSlbConn as $item1) {
                    $res['HaSlbConn'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['HaSlbConn'])) {
            if (!empty($map['HaSlbConn'])) {
                $model->haSlbConn = [];
                $n1 = 0;
                foreach ($map['HaSlbConn'] as $item1) {
                    $model->haSlbConn[$n1] = haSlbConn::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
