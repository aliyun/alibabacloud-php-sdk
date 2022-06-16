<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeClusterDetailResponseBody\result\instanceInfo;

use AlibabaCloud\Tea\Model;

class availablePodInfoList extends Model
{
    /**
     * @var int
     */
    public $availablePodCount;

    /**
     * @var string
     */
    public $cupRequest;

    /**
     * @var string
     */
    public $memRequest;
    protected $_name = [
        'availablePodCount' => 'AvailablePodCount',
        'cupRequest'        => 'CupRequest',
        'memRequest'        => 'MemRequest',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availablePodCount) {
            $res['AvailablePodCount'] = $this->availablePodCount;
        }
        if (null !== $this->cupRequest) {
            $res['CupRequest'] = $this->cupRequest;
        }
        if (null !== $this->memRequest) {
            $res['MemRequest'] = $this->memRequest;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availablePodInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailablePodCount'])) {
            $model->availablePodCount = $map['AvailablePodCount'];
        }
        if (isset($map['CupRequest'])) {
            $model->cupRequest = $map['CupRequest'];
        }
        if (isset($map['MemRequest'])) {
            $model->memRequest = $map['MemRequest'];
        }

        return $model;
    }
}
