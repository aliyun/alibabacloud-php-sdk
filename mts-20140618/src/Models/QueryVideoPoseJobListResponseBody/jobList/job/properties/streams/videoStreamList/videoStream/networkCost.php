<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryVideoPoseJobListResponseBody\jobList\job\properties\streams\videoStreamList\videoStream;

use AlibabaCloud\Tea\Model;

class networkCost extends Model
{
    /**
     * @var string
     */
    public $preloadTime;

    /**
     * @var string
     */
    public $avgBitrate;

    /**
     * @var string
     */
    public $costBandwidth;
    protected $_name = [
        'preloadTime'   => 'PreloadTime',
        'avgBitrate'    => 'AvgBitrate',
        'costBandwidth' => 'CostBandwidth',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->preloadTime) {
            $res['PreloadTime'] = $this->preloadTime;
        }
        if (null !== $this->avgBitrate) {
            $res['AvgBitrate'] = $this->avgBitrate;
        }
        if (null !== $this->costBandwidth) {
            $res['CostBandwidth'] = $this->costBandwidth;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkCost
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PreloadTime'])) {
            $model->preloadTime = $map['PreloadTime'];
        }
        if (isset($map['AvgBitrate'])) {
            $model->avgBitrate = $map['AvgBitrate'];
        }
        if (isset($map['CostBandwidth'])) {
            $model->costBandwidth = $map['CostBandwidth'];
        }

        return $model;
    }
}
