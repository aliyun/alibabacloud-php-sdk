<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\QueryHBaseHaDBResponseBody\clusterList\cluster\haSlbConnList;

use AlibabaCloud\Tea\Model;

class haSlbConn extends Model
{
    /**
     * @var string
     */
    public $slbConnAddr;

    /**
     * @var string
     */
    public $hbaseType;

    /**
     * @var string
     */
    public $slbType;
    protected $_name = [
        'slbConnAddr' => 'SlbConnAddr',
        'hbaseType'   => 'HbaseType',
        'slbType'     => 'SlbType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->slbConnAddr) {
            $res['SlbConnAddr'] = $this->slbConnAddr;
        }
        if (null !== $this->hbaseType) {
            $res['HbaseType'] = $this->hbaseType;
        }
        if (null !== $this->slbType) {
            $res['SlbType'] = $this->slbType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return haSlbConn
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SlbConnAddr'])) {
            $model->slbConnAddr = $map['SlbConnAddr'];
        }
        if (isset($map['HbaseType'])) {
            $model->hbaseType = $map['HbaseType'];
        }
        if (isset($map['SlbType'])) {
            $model->slbType = $map['SlbType'];
        }

        return $model;
    }
}
