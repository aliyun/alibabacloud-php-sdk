<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeUpPeakPublishStreamDataResponseBody\describeUpPeakPublishStreamDatas;

use AlibabaCloud\Tea\Model;

class describeUpPeakPublishStreamData extends Model
{
    /**
     * @var string
     */
    public $bandWidth;

    /**
     * @var string
     */
    public $peakTime;

    /**
     * @var int
     */
    public $publishStreamNum;

    /**
     * @var string
     */
    public $queryTime;

    /**
     * @var string
     */
    public $statName;
    protected $_name = [
        'bandWidth'        => 'BandWidth',
        'peakTime'         => 'PeakTime',
        'publishStreamNum' => 'PublishStreamNum',
        'queryTime'        => 'QueryTime',
        'statName'         => 'StatName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandWidth) {
            $res['BandWidth'] = $this->bandWidth;
        }
        if (null !== $this->peakTime) {
            $res['PeakTime'] = $this->peakTime;
        }
        if (null !== $this->publishStreamNum) {
            $res['PublishStreamNum'] = $this->publishStreamNum;
        }
        if (null !== $this->queryTime) {
            $res['QueryTime'] = $this->queryTime;
        }
        if (null !== $this->statName) {
            $res['StatName'] = $this->statName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return describeUpPeakPublishStreamData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BandWidth'])) {
            $model->bandWidth = $map['BandWidth'];
        }
        if (isset($map['PeakTime'])) {
            $model->peakTime = $map['PeakTime'];
        }
        if (isset($map['PublishStreamNum'])) {
            $model->publishStreamNum = $map['PublishStreamNum'];
        }
        if (isset($map['QueryTime'])) {
            $model->queryTime = $map['QueryTime'];
        }
        if (isset($map['StatName'])) {
            $model->statName = $map['StatName'];
        }

        return $model;
    }
}
