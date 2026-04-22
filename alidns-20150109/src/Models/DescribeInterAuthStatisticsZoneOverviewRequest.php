<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;

class DescribeInterAuthStatisticsZoneOverviewRequest extends Model
{
    /**
     * @var string
     */
    public $overviewPeriod;

    /**
     * @var string
     */
    public $serverRegion;

    /**
     * @var string
     */
    public $zoneName;
    protected $_name = [
        'overviewPeriod' => 'OverviewPeriod',
        'serverRegion' => 'ServerRegion',
        'zoneName' => 'ZoneName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->overviewPeriod) {
            $res['OverviewPeriod'] = $this->overviewPeriod;
        }

        if (null !== $this->serverRegion) {
            $res['ServerRegion'] = $this->serverRegion;
        }

        if (null !== $this->zoneName) {
            $res['ZoneName'] = $this->zoneName;
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
        if (isset($map['OverviewPeriod'])) {
            $model->overviewPeriod = $map['OverviewPeriod'];
        }

        if (isset($map['ServerRegion'])) {
            $model->serverRegion = $map['ServerRegion'];
        }

        if (isset($map['ZoneName'])) {
            $model->zoneName = $map['ZoneName'];
        }

        return $model;
    }
}
