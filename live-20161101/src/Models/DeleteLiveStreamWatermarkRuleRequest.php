<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DeleteLiveStreamWatermarkRuleRequest extends Model
{
    /**
     * @description The name of the application to which the live stream belongs.
     *
     * @example liveApp****
     *
     * @var string
     */
    public $app;

    /**
     * @description The streaming domain.
     *
     * This parameter is required.
     *
     * @example example.aliyundoc.com
     *
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the watermark rule.
     *
     * >  You can obtain the rule ID by checking the value of the RuleId parameter that is returned by the [AddLiveStreamWatermarkRule](https://help.aliyun.com/document_detail/2848100.html) operation.
     *
     * @example 445409ec-7eaa-461d -8f29-4bec2eb9****
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description The name of the stream. The following matching rules apply:
     *
     *   A stream name can be exactly matched, Example: liveStreamA.
     *   Fuzzy match is also supported. The use of an asterisk (`*`) allows all approximate matches to be found.
     *   You can place the asterisk before or after an approximate string.
     *
     * >
     *
     *   Fuzzy match: Only one asterisk (`*`) before or after an approximate string is allowed. The approximate string must be enclosed in `()`. Separate multiple strings with vertical bars (`|`).
     *
     *   For example, `*(t1|t2)` matches all streams whose name has the `t1` or `t2` suffix, and `(abc|123)*` matches all streams whose name has the `abc` or `123` prefix.
     *
     * @example liveStreamA
     *
     * @var string
     */
    public $stream;
    protected $_name = [
        'app' => 'App',
        'domain' => 'Domain',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'ruleId' => 'RuleId',
        'stream' => 'Stream',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->app) {
            $res['App'] = $this->app;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->stream) {
            $res['Stream'] = $this->stream;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteLiveStreamWatermarkRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['App'])) {
            $model->app = $map['App'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['Stream'])) {
            $model->stream = $map['Stream'];
        }

        return $model;
    }
}
