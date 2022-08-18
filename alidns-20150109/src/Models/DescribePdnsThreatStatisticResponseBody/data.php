<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribePdnsThreatStatisticResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $dohTotalCount;

    /**
     * @var string
     */
    public $threatLevel;

    /**
     * @var string
     */
    public $threatType;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $udpTotalCount;
    protected $_name = [
        'dohTotalCount' => 'DohTotalCount',
        'threatLevel'   => 'ThreatLevel',
        'threatType'    => 'ThreatType',
        'timestamp'     => 'Timestamp',
        'totalCount'    => 'TotalCount',
        'udpTotalCount' => 'UdpTotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dohTotalCount) {
            $res['DohTotalCount'] = $this->dohTotalCount;
        }
        if (null !== $this->threatLevel) {
            $res['ThreatLevel'] = $this->threatLevel;
        }
        if (null !== $this->threatType) {
            $res['ThreatType'] = $this->threatType;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->udpTotalCount) {
            $res['UdpTotalCount'] = $this->udpTotalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DohTotalCount'])) {
            $model->dohTotalCount = $map['DohTotalCount'];
        }
        if (isset($map['ThreatLevel'])) {
            $model->threatLevel = $map['ThreatLevel'];
        }
        if (isset($map['ThreatType'])) {
            $model->threatType = $map['ThreatType'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['UdpTotalCount'])) {
            $model->udpTotalCount = $map['UdpTotalCount'];
        }

        return $model;
    }
}
