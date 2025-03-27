<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaLiveChannelRequest\videoSettings;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaLiveChannelRequest\videoSettings\videoCodecSetting\codecDetail;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaLiveChannelRequest\videoSettings\videoCodecSetting\framerate;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaLiveChannelRequest\videoSettings\videoCodecSetting\gop;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateMediaLiveChannelRequest\videoSettings\videoCodecSetting\rate;

class videoCodecSetting extends Model
{
    /**
     * @var codecDetail
     */
    public $codecDetail;

    /**
     * @var framerate
     */
    public $framerate;

    /**
     * @var gop
     */
    public $gop;

    /**
     * @var rate
     */
    public $rate;
    protected $_name = [
        'codecDetail' => 'CodecDetail',
        'framerate' => 'Framerate',
        'gop' => 'Gop',
        'rate' => 'Rate',
    ];

    public function validate()
    {
        if (null !== $this->codecDetail) {
            $this->codecDetail->validate();
        }
        if (null !== $this->framerate) {
            $this->framerate->validate();
        }
        if (null !== $this->gop) {
            $this->gop->validate();
        }
        if (null !== $this->rate) {
            $this->rate->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->codecDetail) {
            $res['CodecDetail'] = null !== $this->codecDetail ? $this->codecDetail->toArray($noStream) : $this->codecDetail;
        }

        if (null !== $this->framerate) {
            $res['Framerate'] = null !== $this->framerate ? $this->framerate->toArray($noStream) : $this->framerate;
        }

        if (null !== $this->gop) {
            $res['Gop'] = null !== $this->gop ? $this->gop->toArray($noStream) : $this->gop;
        }

        if (null !== $this->rate) {
            $res['Rate'] = null !== $this->rate ? $this->rate->toArray($noStream) : $this->rate;
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
