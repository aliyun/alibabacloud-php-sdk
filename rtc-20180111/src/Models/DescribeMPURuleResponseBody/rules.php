<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeMPURuleResponseBody;

use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @var int
     */
    public $mediaEncode;

    /**
     * @var int
     */
    public $cropMode;

    /**
     * @var string
     */
    public $callBack;

    /**
     * @var string
     */
    public $playDomain;

    /**
     * @var string
     */
    public $channelPrefix;

    /**
     * @var int
     */
    public $backgroudColor;

    /**
     * @var int
     */
    public $isEnable;

    /**
     * @var string[]
     */
    public $layoutIds;

    /**
     * @var string
     */
    public $taskProfile;

    /**
     * @var int
     */
    public $ruleId;
    protected $_name = [
        'mediaEncode'    => 'MediaEncode',
        'cropMode'       => 'CropMode',
        'callBack'       => 'CallBack',
        'playDomain'     => 'PlayDomain',
        'channelPrefix'  => 'ChannelPrefix',
        'backgroudColor' => 'BackgroudColor',
        'isEnable'       => 'IsEnable',
        'layoutIds'      => 'LayoutIds',
        'taskProfile'    => 'TaskProfile',
        'ruleId'         => 'RuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaEncode) {
            $res['MediaEncode'] = $this->mediaEncode;
        }
        if (null !== $this->cropMode) {
            $res['CropMode'] = $this->cropMode;
        }
        if (null !== $this->callBack) {
            $res['CallBack'] = $this->callBack;
        }
        if (null !== $this->playDomain) {
            $res['PlayDomain'] = $this->playDomain;
        }
        if (null !== $this->channelPrefix) {
            $res['ChannelPrefix'] = $this->channelPrefix;
        }
        if (null !== $this->backgroudColor) {
            $res['BackgroudColor'] = $this->backgroudColor;
        }
        if (null !== $this->isEnable) {
            $res['IsEnable'] = $this->isEnable;
        }
        if (null !== $this->layoutIds) {
            $res['LayoutIds'] = $this->layoutIds;
        }
        if (null !== $this->taskProfile) {
            $res['TaskProfile'] = $this->taskProfile;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaEncode'])) {
            $model->mediaEncode = $map['MediaEncode'];
        }
        if (isset($map['CropMode'])) {
            $model->cropMode = $map['CropMode'];
        }
        if (isset($map['CallBack'])) {
            $model->callBack = $map['CallBack'];
        }
        if (isset($map['PlayDomain'])) {
            $model->playDomain = $map['PlayDomain'];
        }
        if (isset($map['ChannelPrefix'])) {
            $model->channelPrefix = $map['ChannelPrefix'];
        }
        if (isset($map['BackgroudColor'])) {
            $model->backgroudColor = $map['BackgroudColor'];
        }
        if (isset($map['IsEnable'])) {
            $model->isEnable = $map['IsEnable'];
        }
        if (isset($map['LayoutIds'])) {
            if (!empty($map['LayoutIds'])) {
                $model->layoutIds = $map['LayoutIds'];
            }
        }
        if (isset($map['TaskProfile'])) {
            $model->taskProfile = $map['TaskProfile'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
