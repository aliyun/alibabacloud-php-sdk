<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpShotJobListResponseBody\fpShotJobList\fpShotJob;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpShotJobListResponseBody\fpShotJobList\fpShotJob\fpShotResult\audioFpShots;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpShotJobListResponseBody\fpShotJobList\fpShotJob\fpShotResult\fpShots;
use AlibabaCloud\Tea\Model;

class fpShotResult extends Model
{
    /**
     * @var audioFpShots
     */
    public $audioFpShots;

    /**
     * @var fpShots
     */
    public $fpShots;
    protected $_name = [
        'audioFpShots' => 'AudioFpShots',
        'fpShots'      => 'FpShots',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioFpShots) {
            $res['AudioFpShots'] = null !== $this->audioFpShots ? $this->audioFpShots->toMap() : null;
        }
        if (null !== $this->fpShots) {
            $res['FpShots'] = null !== $this->fpShots ? $this->fpShots->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fpShotResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioFpShots'])) {
            $model->audioFpShots = audioFpShots::fromMap($map['AudioFpShots']);
        }
        if (isset($map['FpShots'])) {
            $model->fpShots = fpShots::fromMap($map['FpShots']);
        }

        return $model;
    }
}
