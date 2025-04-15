<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Dara\Model;

class UpdateAutoLiveStreamRuleRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $callBack;

    /**
     * @var string[]
     */
    public $channelIdPrefixes;

    /**
     * @var string[]
     */
    public $channelIds;

    /**
     * @var int
     */
    public $mediaEncode;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $playDomain;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'appId' => 'AppId',
        'callBack' => 'CallBack',
        'channelIdPrefixes' => 'ChannelIdPrefixes',
        'channelIds' => 'ChannelIds',
        'mediaEncode' => 'MediaEncode',
        'ownerId' => 'OwnerId',
        'playDomain' => 'PlayDomain',
        'ruleId' => 'RuleId',
        'ruleName' => 'RuleName',
    ];

    public function validate()
    {
        if (\is_array($this->channelIdPrefixes)) {
            Model::validateArray($this->channelIdPrefixes);
        }
        if (\is_array($this->channelIds)) {
            Model::validateArray($this->channelIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->callBack) {
            $res['CallBack'] = $this->callBack;
        }

        if (null !== $this->channelIdPrefixes) {
            if (\is_array($this->channelIdPrefixes)) {
                $res['ChannelIdPrefixes'] = [];
                $n1 = 0;
                foreach ($this->channelIdPrefixes as $item1) {
                    $res['ChannelIdPrefixes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->channelIds) {
            if (\is_array($this->channelIds)) {
                $res['ChannelIds'] = [];
                $n1 = 0;
                foreach ($this->channelIds as $item1) {
                    $res['ChannelIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->mediaEncode) {
            $res['MediaEncode'] = $this->mediaEncode;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->playDomain) {
            $res['PlayDomain'] = $this->playDomain;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
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

        if (isset($map['CallBack'])) {
            $model->callBack = $map['CallBack'];
        }

        if (isset($map['ChannelIdPrefixes'])) {
            if (!empty($map['ChannelIdPrefixes'])) {
                $model->channelIdPrefixes = [];
                $n1 = 0;
                foreach ($map['ChannelIdPrefixes'] as $item1) {
                    $model->channelIdPrefixes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ChannelIds'])) {
            if (!empty($map['ChannelIds'])) {
                $model->channelIds = [];
                $n1 = 0;
                foreach ($map['ChannelIds'] as $item1) {
                    $model->channelIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['MediaEncode'])) {
            $model->mediaEncode = $map['MediaEncode'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PlayDomain'])) {
            $model->playDomain = $map['PlayDomain'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        return $model;
    }
}
