<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class StartRtcCloudTranscodeShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $channelId;

    /**
     * @var string
     */
    public $inputParamShrink;

    /**
     * @var int
     */
    public $maxIdleTime;

    /**
     * @var string
     */
    public $outputParamsShrink;
    protected $_name = [
        'appId' => 'AppId',
        'channelId' => 'ChannelId',
        'inputParamShrink' => 'InputParam',
        'maxIdleTime' => 'MaxIdleTime',
        'outputParamsShrink' => 'OutputParams',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }

        if (null !== $this->inputParamShrink) {
            $res['InputParam'] = $this->inputParamShrink;
        }

        if (null !== $this->maxIdleTime) {
            $res['MaxIdleTime'] = $this->maxIdleTime;
        }

        if (null !== $this->outputParamsShrink) {
            $res['OutputParams'] = $this->outputParamsShrink;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }

        if (isset($map['InputParam'])) {
            $model->inputParamShrink = $map['InputParam'];
        }

        if (isset($map['MaxIdleTime'])) {
            $model->maxIdleTime = $map['MaxIdleTime'];
        }

        if (isset($map['OutputParams'])) {
            $model->outputParamsShrink = $map['OutputParams'];
        }

        return $model;
    }
}
