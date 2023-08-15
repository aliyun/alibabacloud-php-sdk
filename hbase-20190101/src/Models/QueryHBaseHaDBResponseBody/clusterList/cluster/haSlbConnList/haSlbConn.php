<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\QueryHBaseHaDBResponseBody\clusterList\cluster\haSlbConnList;

use AlibabaCloud\Tea\Model;

class haSlbConn extends Model
{
    /**
     * @example Standby
     *
     * @var string
     */
    public $hbaseType;

    /**
     * @example ha-v21tmnxjwh2yuy1il-phoenix.bds.9b78df04-b.rds.aliyuncs.com:8765
     *
     * @var string
     */
    public $slbConnAddr;

    /**
     * @example phoenix
     *
     * @var string
     */
    public $slbType;
    protected $_name = [
        'hbaseType'   => 'HbaseType',
        'slbConnAddr' => 'SlbConnAddr',
        'slbType'     => 'SlbType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hbaseType) {
            $res['HbaseType'] = $this->hbaseType;
        }
        if (null !== $this->slbConnAddr) {
            $res['SlbConnAddr'] = $this->slbConnAddr;
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
        if (isset($map['HbaseType'])) {
            $model->hbaseType = $map['HbaseType'];
        }
        if (isset($map['SlbConnAddr'])) {
            $model->slbConnAddr = $map['SlbConnAddr'];
        }
        if (isset($map['SlbType'])) {
            $model->slbType = $map['SlbType'];
        }

        return $model;
    }
}
