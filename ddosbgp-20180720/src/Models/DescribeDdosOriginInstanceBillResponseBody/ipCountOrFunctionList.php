<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeDdosOriginInstanceBillResponseBody;

use AlibabaCloud\Dara\Model;

class ipCountOrFunctionList extends Model
{
    /**
     * @var string
     */
    public $coverage;

    /**
     * @var int
     */
    public $ipCntCn;

    /**
     * @var int
     */
    public $ipCntOv;

    /**
     * @var string
     */
    public $memberIpCnt;

    /**
     * @var int
     */
    public $time;
    protected $_name = [
        'coverage' => 'Coverage',
        'ipCntCn' => 'IpCntCn',
        'ipCntOv' => 'IpCntOv',
        'memberIpCnt' => 'MemberIpCnt',
        'time' => 'Time',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->coverage) {
            $res['Coverage'] = $this->coverage;
        }

        if (null !== $this->ipCntCn) {
            $res['IpCntCn'] = $this->ipCntCn;
        }

        if (null !== $this->ipCntOv) {
            $res['IpCntOv'] = $this->ipCntOv;
        }

        if (null !== $this->memberIpCnt) {
            $res['MemberIpCnt'] = $this->memberIpCnt;
        }

        if (null !== $this->time) {
            $res['Time'] = $this->time;
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
        if (isset($map['Coverage'])) {
            $model->coverage = $map['Coverage'];
        }

        if (isset($map['IpCntCn'])) {
            $model->ipCntCn = $map['IpCntCn'];
        }

        if (isset($map['IpCntOv'])) {
            $model->ipCntOv = $map['IpCntOv'];
        }

        if (isset($map['MemberIpCnt'])) {
            $model->memberIpCnt = $map['MemberIpCnt'];
        }

        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
