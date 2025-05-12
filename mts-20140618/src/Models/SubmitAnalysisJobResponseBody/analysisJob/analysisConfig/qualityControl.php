<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SubmitAnalysisJobResponseBody\analysisJob\analysisConfig;

use AlibabaCloud\Dara\Model;

class qualityControl extends Model
{
    /**
     * @var string
     */
    public $methodStreaming;

    /**
     * @var string
     */
    public $rateQuality;
    protected $_name = [
        'methodStreaming' => 'MethodStreaming',
        'rateQuality' => 'RateQuality',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->methodStreaming) {
            $res['MethodStreaming'] = $this->methodStreaming;
        }

        if (null !== $this->rateQuality) {
            $res['RateQuality'] = $this->rateQuality;
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
        if (isset($map['MethodStreaming'])) {
            $model->methodStreaming = $map['MethodStreaming'];
        }

        if (isset($map['RateQuality'])) {
            $model->rateQuality = $map['RateQuality'];
        }

        return $model;
    }
}
