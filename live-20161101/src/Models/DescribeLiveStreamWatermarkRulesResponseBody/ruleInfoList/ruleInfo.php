<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamWatermarkRulesResponseBody\ruleInfoList;

use AlibabaCloud\Tea\Model;

class ruleInfo extends Model
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
     * @description The description of the custom rule.
     *
     * @example my rule
     *
     * @var string
     */
    public $description;

    /**
     * @description The streaming domain.
     *
     * @example example.aliyundoc.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The name of the custom rule.
     *
     * @example WatermarkRule****
     *
     * @var string
     */
    public $name;

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
     * @description The name of the live stream. The following matching rules apply:
     *
     *   A stream name can be exactly matched. Example: liveStreamA.
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

    /**
     * @description The ID of the watermark template.
     *
     * >  You can obtain the template ID by checking the value of the TemplateId parameter that is returned by the [AddLiveStreamWatermark](https://help.aliyun.com/document_detail/2848096.html) operation.
     *
     * @example 445409ec-7eaa-461d-8f29-4bec2eb9 ****
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'app' => 'App',
        'description' => 'Description',
        'domain' => 'Domain',
        'name' => 'Name',
        'ruleId' => 'RuleId',
        'stream' => 'Stream',
        'templateId' => 'TemplateId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->app) {
            $res['App'] = $this->app;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->stream) {
            $res['Stream'] = $this->stream;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['App'])) {
            $model->app = $map['App'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['Stream'])) {
            $model->stream = $map['Stream'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
