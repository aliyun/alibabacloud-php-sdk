<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeDestinationPortEventResponseBody;

use AlibabaCloud\Dara\Model;

class portList extends Model
{
    /**
     * @var string
     */
    public $dstPort;

    /**
     * @var int
     */
    public $inPkts;
    protected $_name = [
        'dstPort' => 'DstPort',
        'inPkts' => 'InPkts',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
