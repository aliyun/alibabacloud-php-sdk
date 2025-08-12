<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeUpBpsPeakOfLineResponseBody\describeUpBpsPeakOfLines;

use AlibabaCloud\Dara\Model;

class describeUpBpsPeakOfLine extends Model
{
    /**
     * @var float
     */
    public $bandWidth;

    /**
     * @var string
     */
    public $peakTime;

    /**
     * @var string
     */
    public $queryTime;

    /**
     * @var string
     */
    public $statName;
    protected $_name = [
        'bandWidth' => 'BandWidth',
        'peakTime' => 'PeakTime',
        'queryTime' => 'QueryTime',
        'statName' => 'StatName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bandWidth) {
            $res['BandWidth'] = $this->bandWidth;
        }

        if (null !== $this->peakTime) {
            $res['PeakTime'] = $this->peakTime;
        }

        if (null !== $this->queryTime) {
            $res['QueryTime'] = $this->queryTime;
        }

        if (null !== $this->statName) {
            $res['StatName'] = $this->statName;
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
        if (isset($map['BandWidth'])) {
            $model->bandWidth = $map['BandWidth'];
        }

        if (isset($map['PeakTime'])) {
            $model->peakTime = $map['PeakTime'];
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
