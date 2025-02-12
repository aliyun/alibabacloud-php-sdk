<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeChannelOverallDataResponseBody;

use AlibabaCloud\Dara\Model;

class overallData extends Model
{
    /**
     * @var float
     */
    public $connAvgTime;
    /**
     * @var float
     */
    public $fiveSecJoinRate;
    /**
     * @var float
     */
    public $totalAudioStuckRate;
    /**
     * @var float
     */
    public $totalVideoStuckRate;
    /**
     * @var float
     */
    public $totalVideoVagueRate;
    protected $_name = [
        'connAvgTime'         => 'ConnAvgTime',
        'fiveSecJoinRate'     => 'FiveSecJoinRate',
        'totalAudioStuckRate' => 'TotalAudioStuckRate',
        'totalVideoStuckRate' => 'TotalVideoStuckRate',
        'totalVideoVagueRate' => 'TotalVideoVagueRate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connAvgTime) {
            $res['ConnAvgTime'] = $this->connAvgTime;
        }

        if (null !== $this->fiveSecJoinRate) {
            $res['FiveSecJoinRate'] = $this->fiveSecJoinRate;
        }

        if (null !== $this->totalAudioStuckRate) {
            $res['TotalAudioStuckRate'] = $this->totalAudioStuckRate;
        }

        if (null !== $this->totalVideoStuckRate) {
            $res['TotalVideoStuckRate'] = $this->totalVideoStuckRate;
        }

        if (null !== $this->totalVideoVagueRate) {
            $res['TotalVideoVagueRate'] = $this->totalVideoVagueRate;
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
        if (isset($map['ConnAvgTime'])) {
            $model->connAvgTime = $map['ConnAvgTime'];
        }

        if (isset($map['FiveSecJoinRate'])) {
            $model->fiveSecJoinRate = $map['FiveSecJoinRate'];
        }

        if (isset($map['TotalAudioStuckRate'])) {
            $model->totalAudioStuckRate = $map['TotalAudioStuckRate'];
        }

        if (isset($map['TotalVideoStuckRate'])) {
            $model->totalVideoStuckRate = $map['TotalVideoStuckRate'];
        }

        if (isset($map['TotalVideoVagueRate'])) {
            $model->totalVideoVagueRate = $map['TotalVideoVagueRate'];
        }

        return $model;
    }
}
