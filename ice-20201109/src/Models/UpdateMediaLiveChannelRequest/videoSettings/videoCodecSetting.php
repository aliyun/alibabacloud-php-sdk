<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaLiveChannelRequest\videoSettings;

use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaLiveChannelRequest\videoSettings\videoCodecSetting\codecDetail;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaLiveChannelRequest\videoSettings\videoCodecSetting\framerate;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaLiveChannelRequest\videoSettings\videoCodecSetting\gop;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaLiveChannelRequest\videoSettings\videoCodecSetting\rate;
use AlibabaCloud\Tea\Model;

class videoCodecSetting extends Model
{
    /**
     * @description The video encoding settings.
     *
     * @var codecDetail
     */
    public $codecDetail;

    /**
     * @description The frame rate. If it is not specified, the source specification is used.
     *
     * @var framerate
     */
    public $framerate;

    /**
     * @description The GOP setting. If it is not specified, the source specification is used.
     *
     * @var gop
     */
    public $gop;

    /**
     * @description The video encoding rate. If it is not specified, the source specification is used.
     *
     * @var rate
     */
    public $rate;
    protected $_name = [
        'codecDetail' => 'CodecDetail',
        'framerate'   => 'Framerate',
        'gop'         => 'Gop',
        'rate'        => 'Rate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->codecDetail) {
            $res['CodecDetail'] = null !== $this->codecDetail ? $this->codecDetail->toMap() : null;
        }
        if (null !== $this->framerate) {
            $res['Framerate'] = null !== $this->framerate ? $this->framerate->toMap() : null;
        }
        if (null !== $this->gop) {
            $res['Gop'] = null !== $this->gop ? $this->gop->toMap() : null;
        }
        if (null !== $this->rate) {
            $res['Rate'] = null !== $this->rate ? $this->rate->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoCodecSetting
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CodecDetail'])) {
            $model->codecDetail = codecDetail::fromMap($map['CodecDetail']);
        }
        if (isset($map['Framerate'])) {
            $model->framerate = framerate::fromMap($map['Framerate']);
        }
        if (isset($map['Gop'])) {
            $model->gop = gop::fromMap($map['Gop']);
        }
        if (isset($map['Rate'])) {
            $model->rate = rate::fromMap($map['Rate']);
        }

        return $model;
    }
}
