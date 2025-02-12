<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeAutoLiveStreamRuleResponseBody;

use AlibabaCloud\Dara\Model;

class rules extends Model
{
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
     * @var string
     */
    public $createTime;
    /**
     * @var int
     */
    public $mediaEncode;
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
    /**
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
        if (null !== $this->callBack) {
            $res['CallBack'] = $this->callBack;
        }

        if (null !== $this->channelIdPrefixes) {
            if (\is_array($this->channelIdPrefixes)) {
                $res['ChannelIdPrefixes'] = [];
                $n1                       = 0;
                foreach ($this->channelIdPrefixes as $item1) {
                    $res['ChannelIdPrefixes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->channelIds) {
            if (\is_array($this->channelIds)) {
                $res['ChannelIds'] = [];
                $n1                = 0;
                foreach ($this->channelIds as $item1) {
                    $res['ChannelIds'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallBack'])) {
            $model->callBack = $map['CallBack'];
        }

        if (isset($map['ChannelIdPrefixes'])) {
            if (!empty($map['ChannelIdPrefixes'])) {
                $model->channelIdPrefixes = [];
                $n1                       = 0;
                foreach ($map['ChannelIdPrefixes'] as $item1) {
                    $model->channelIdPrefixes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ChannelIds'])) {
            if (!empty($map['ChannelIds'])) {
                $model->channelIds = [];
                $n1                = 0;
                foreach ($map['ChannelIds'] as $item1) {
                    $model->channelIds[$n1++] = $item1;
                }
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
