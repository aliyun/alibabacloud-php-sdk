<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\MediaConvertJobFeature;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\MediaConvertJobFeature\clip\timeSpan;

class clip extends Model
{
    /**
     * @var string
     */
    public $configToClipFirstPart;

    /**
     * @var timeSpan
     */
    public $timeSpan;
    protected $_name = [
        'configToClipFirstPart' => 'ConfigToClipFirstPart',
        'timeSpan' => 'TimeSpan',
    ];

    public function validate()
    {
        if (null !== $this->timeSpan) {
            $this->timeSpan->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configToClipFirstPart) {
            $res['ConfigToClipFirstPart'] = $this->configToClipFirstPart;
        }

        if (null !== $this->timeSpan) {
            $res['TimeSpan'] = null !== $this->timeSpan ? $this->timeSpan->toArray($noStream) : $this->timeSpan;
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
        if (isset($map['ConfigToClipFirstPart'])) {
            $model->configToClipFirstPart = $map['ConfigToClipFirstPart'];
        }

        if (isset($map['TimeSpan'])) {
            $model->timeSpan = timeSpan::fromMap($map['TimeSpan']);
        }

        return $model;
    }
}
