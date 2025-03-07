<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveTranscodeTemplatesResponseBody\templateContentList;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveTranscodeTemplatesResponseBody\templateContentList\templateConfig\audioParams;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListLiveTranscodeTemplatesResponseBody\templateContentList\templateConfig\videoParams;
use AlibabaCloud\Tea\Model;

class templateConfig extends Model
{
    /**
     * @description The audio parameters.
     *
     * @var audioParams
     */
    public $audioParams;

    /**
     * @description The video parameters.
     *
     * @var videoParams
     */
    public $videoParams;
    protected $_name = [
        'audioParams' => 'AudioParams',
        'videoParams' => 'VideoParams',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioParams) {
            $res['AudioParams'] = null !== $this->audioParams ? $this->audioParams->toMap() : null;
        }
        if (null !== $this->videoParams) {
            $res['VideoParams'] = null !== $this->videoParams ? $this->videoParams->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return templateConfig
     */
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
