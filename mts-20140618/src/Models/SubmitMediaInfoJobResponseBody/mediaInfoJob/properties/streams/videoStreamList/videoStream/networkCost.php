<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitMediaInfoJobResponseBody\mediaInfoJob\properties\streams\videoStreamList\videoStream;

use AlibabaCloud\Dara\Model;

class networkCost extends Model
{
    /**
     * @var string
     */
    public $avgBitrate;

    /**
     * @var string
     */
    public $costBandwidth;

    /**
     * @var string
     */
    public $preloadTime;
    protected $_name = [
        'avgBitrate' => 'AvgBitrate',
        'costBandwidth' => 'CostBandwidth',
        'preloadTime' => 'PreloadTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avgBitrate) {
            $res['AvgBitrate'] = $this->avgBitrate;
        }

        if (null !== $this->costBandwidth) {
            $res['CostBandwidth'] = $this->costBandwidth;
        }

        if (null !== $this->preloadTime) {
            $res['PreloadTime'] = $this->preloadTime;
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
        if (isset($map['AvgBitrate'])) {
            $model->avgBitrate = $map['AvgBitrate'];
        }

        if (isset($map['CostBandwidth'])) {
            $model->costBandwidth = $map['CostBandwidth'];
        }

        if (isset($map['PreloadTime'])) {
            $model->preloadTime = $map['PreloadTime'];
        }

        return $model;
    }
}
