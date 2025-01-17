<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveTranscodeTemplateResponseBody\templateContent;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveTranscodeTemplateResponseBody\templateContent\templateConfig\audioParams;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveTranscodeTemplateResponseBody\templateContent\templateConfig\videoParams;

class templateConfig extends Model
{
    /**
     * @var audioParams
     */
    public $audioParams;
    /**
     * @var videoParams
     */
    public $videoParams;
    protected $_name = [
        'audioParams' => 'AudioParams',
        'videoParams' => 'VideoParams',
    ];

    public function validate()
    {
        if (null !== $this->audioParams) {
            $this->audioParams->validate();
        }
        if (null !== $this->videoParams) {
            $this->videoParams->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audioParams) {
            $res['AudioParams'] = null !== $this->audioParams ? $this->audioParams->toArray($noStream) : $this->audioParams;
        }

        if (null !== $this->videoParams) {
            $res['VideoParams'] = null !== $this->videoParams ? $this->videoParams->toArray($noStream) : $this->videoParams;
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
        if (isset($map['AudioParams'])) {
            $model->audioParams = audioParams::fromMap($map['AudioParams']);
        }

        if (isset($map['VideoParams'])) {
            $model->videoParams = videoParams::fromMap($map['VideoParams']);
        }

        return $model;
    }
}
