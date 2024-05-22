<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Tea\Model;

class UpdateAutoLiveStreamRuleRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example eo85****
     *
     * @var string
     */
    public $appId;

    /**
     * @example http://example.com/callback
     *
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
     * @example 20
     *
     * @var int
     */
    public $mediaEncode;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description This parameter is required.
     *
     * @example rtmp://${domain}/${app}/${stream}
     *
     * @var string
     */
    public $playDomain;

    /**
     * @description This parameter is required.
     *
     * @example 12
     *
     * @var int
     */
    public $ruleId;

    /**
     * @example testRule
     *
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'appId'             => 'AppId',
        'callBack'          => 'CallBack',
        'channelIdPrefixes' => 'ChannelIdPrefixes',
        'channelIds'        => 'ChannelIds',
        'mediaEncode'       => 'MediaEncode',
        'ownerId'           => 'OwnerId',
        'playDomain'        => 'PlayDomain',
        'ruleId'            => 'RuleId',
        'ruleName'          => 'RuleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->callBack) {
            $res['CallBack'] = $this->callBack;
        }
        if (null !== $this->channelIdPrefixes) {
            $res['ChannelIdPrefixes'] = $this->channelIdPrefixes;
        }
        if (null !== $this->channelIds) {
            $res['ChannelIds'] = $this->channelIds;
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

    /**
     * @param array $map
     *
     * @return UpdateAutoLiveStreamRuleRequest
     */
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
                $model->channelIdPrefixes = $map['ChannelIdPrefixes'];
            }
        }
        if (isset($map['ChannelIds'])) {
            if (!empty($map['ChannelIds'])) {
                $model->channelIds = $map['ChannelIds'];
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
