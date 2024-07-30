<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDestinationPortEventResponseBody;

use AlibabaCloud\Tea\Model;

class portList extends Model
{
    /**
     * @description The destination port.
     *
     * @example 80
     *
     * @var string
     */
    public $dstPort;

    /**
     * @description The number of request packets received by the destination port.
     *
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
