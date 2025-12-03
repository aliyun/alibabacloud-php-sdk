<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\QueryHBaseHaDBResponseBody\clusterList\cluster\haSlbConnList;

use AlibabaCloud\Dara\Model;

class haSlbConn extends Model
{
    /**
     * @var string
     */
    public $hbaseType;

    /**
     * @var string
     */
    public $slbConnAddr;

    /**
     * @var string
     */
    public $slbType;
    protected $_name = [
        'hbaseType' => 'HbaseType',
        'slbConnAddr' => 'SlbConnAddr',
        'slbType' => 'SlbType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
