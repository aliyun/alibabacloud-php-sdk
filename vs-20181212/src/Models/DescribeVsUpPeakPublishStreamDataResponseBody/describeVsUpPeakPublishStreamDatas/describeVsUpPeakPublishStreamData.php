<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsUpPeakPublishStreamDataResponseBody\describeVsUpPeakPublishStreamDatas;

use AlibabaCloud\Tea\Model;

class describeVsUpPeakPublishStreamData extends Model
{
    /**
     * @var string
     */
    public $queryTime;

    /**
     * @var string
     */
    public $statName;

    /**
     * @var string
     */
    public $peakTime;

    /**
     * @var string
     */
    public $bandWidth;

    /**
     * @var int
     */
    public $publishStreamNum;
    protected $_name = [
        'queryTime'        => 'QueryTime',
        'statName'         => 'StatName',
        'peakTime'         => 'PeakTime',
        'bandWidth'        => 'BandWidth',
        'publishStreamNum' => 'PublishStreamNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->queryTime) {
            $res['QueryTime'] = $this->queryTime;
        }
        if (null !== $this->statName) {
            $res['StatName'] = $this->statName;
        }
        if (null !== $this->peakTime) {
            $res['PeakTime'] = $this->peakTime;
        }
        if (null !== $this->bandWidth) {
            $res['BandWidth'] = $this->bandWidth;
        }
        if (null !== $this->publishStreamNum) {
            $res['PublishStreamNum'] = $this->publishStreamNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return describeVsUpPeakPublishStreamData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QueryTime'])) {
            $model->queryTime = $map['QueryTime'];
        }
        if (isset($map['StatName'])) {
            $model->statName = $map['StatName'];
        }
        if (isset($map['PeakTime'])) {
            $model->peakTime = $map['PeakTime'];
        }
        if (isset($map['BandWidth'])) {
            $model->bandWidth = $map['BandWidth'];
        }
        if (isset($map['PublishStreamNum'])) {
            $model->publishStreamNum = $map['PublishStreamNum'];
        }

        return $model;
    }
}
