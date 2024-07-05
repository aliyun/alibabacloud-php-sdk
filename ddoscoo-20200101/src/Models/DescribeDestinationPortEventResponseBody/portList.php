<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDestinationPortEventResponseBody;

use AlibabaCloud\Tea\Model;

class portList extends Model
{
    /**
     * @example 80
     *
     * @var string
     */
    public $dstPort;

    /**
     * @example 8760950
     *
     * @var int
     */
    public $inPkts;
    protected $_name = [
        'dstPort' => 'DstPort',
        'inPkts'  => 'InPkts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dstPort) {
            $res['DstPort'] = $this->dstPort;
        }
        if (null !== $this->inPkts) {
            $res['InPkts'] = $this->inPkts;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return portList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DstPort'])) {
            $model->dstPort = $map['DstPort'];
        }
        if (isset($map['InPkts'])) {
            $model->inPkts = $map['InPkts'];
        }

        return $model;
    }
}
