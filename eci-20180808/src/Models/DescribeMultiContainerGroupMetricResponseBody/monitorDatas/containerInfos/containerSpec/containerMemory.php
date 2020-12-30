<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponseBody\monitorDatas\containerInfos\containerSpec;

use AlibabaCloud\Tea\Model;

class containerMemory extends Model
{
    /**
     * @var int
     */
    public $limit;

    /**
     * @var int
     */
    public $swapLimit;

    /**
     * @var int
     */
    public $reservation;
    protected $_name = [
        'limit'       => 'Limit',
        'swapLimit'   => 'SwapLimit',
        'reservation' => 'Reservation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->swapLimit) {
            $res['SwapLimit'] = $this->swapLimit;
        }
        if (null !== $this->reservation) {
            $res['Reservation'] = $this->reservation;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return containerMemory
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['SwapLimit'])) {
            $model->swapLimit = $map['SwapLimit'];
        }
        if (isset($map['Reservation'])) {
            $model->reservation = $map['Reservation'];
        }

        return $model;
    }
}
