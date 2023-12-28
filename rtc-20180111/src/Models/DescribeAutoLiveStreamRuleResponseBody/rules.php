<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAutoLiveStreamRuleResponseBody;

use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @example http://example.com/callBack
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
     * @example 2021-08-19T02:53:07Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 20
     *
     * @var int
     */
    public $mediaEncode;

    /**
     * @example rtmp://${domain}/${app}/${stream}
     *
     * @var string
     */
    public $playDomain;

    /**
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

    /**
     * @example disable
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'callBack'          => 'CallBack',
        'channelIdPrefixes' => 'ChannelIdPrefixes',
        'channelIds'        => 'ChannelIds',
        'createTime'        => 'CreateTime',
        'mediaEncode'       => 'MediaEncode',
        'playDomain'        => 'PlayDomain',
        'ruleId'            => 'RuleId',
        'ruleName'          => 'RuleName',
        'status'            => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callBack) {
            $res['CallBack'] = $this->callBack;
        }
        if (null !== $this->channelIdPrefixes) {
            $res['ChannelIdPrefixes'] = $this->channelIdPrefixes;
        }
        if (null !== $this->channelIds) {
            $res['ChannelIds'] = $this->channelIds;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->mediaEncode) {
            $res['MediaEncode'] = $this->mediaEncode;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['MediaEncode'])) {
            $model->mediaEncode = $map['MediaEncode'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
