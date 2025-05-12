<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpShotJobListResponseBody\fpShotJobList\fpShotJob;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpShotJobListResponseBody\fpShotJobList\fpShotJob\fpShotResult\audioFpShots;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpShotJobListResponseBody\fpShotJobList\fpShotJob\fpShotResult\fpShots;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryFpShotJobListResponseBody\fpShotJobList\fpShotJob\fpShotResult\textFpShots;

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

    /**
     * @var textFpShots
     */
    public $textFpShots;
    protected $_name = [
        'audioFpShots' => 'AudioFpShots',
        'fpShots' => 'FpShots',
        'textFpShots' => 'TextFpShots',
    ];

    public function validate()
    {
        if (null !== $this->audioFpShots) {
            $this->audioFpShots->validate();
        }
        if (null !== $this->fpShots) {
            $this->fpShots->validate();
        }
        if (null !== $this->textFpShots) {
            $this->textFpShots->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioFpShots) {
            $res['AudioFpShots'] = null !== $this->audioFpShots ? $this->audioFpShots->toArray($noStream) : $this->audioFpShots;
        }

        if (null !== $this->fpShots) {
            $res['FpShots'] = null !== $this->fpShots ? $this->fpShots->toArray($noStream) : $this->fpShots;
        }

        if (null !== $this->textFpShots) {
            $res['TextFpShots'] = null !== $this->textFpShots ? $this->textFpShots->toArray($noStream) : $this->textFpShots;
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
        if (isset($map['AudioFpShots'])) {
            $model->audioFpShots = audioFpShots::fromMap($map['AudioFpShots']);
        }

        if (isset($map['FpShots'])) {
            $model->fpShots = fpShots::fromMap($map['FpShots']);
        }

        if (isset($map['TextFpShots'])) {
            $model->textFpShots = textFpShots::fromMap($map['TextFpShots']);
        }

        return $model;
    }
}
