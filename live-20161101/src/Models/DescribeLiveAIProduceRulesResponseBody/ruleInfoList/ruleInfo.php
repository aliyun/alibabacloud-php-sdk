<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAIProduceRulesResponseBody\ruleInfoList;

use AlibabaCloud\Tea\Model;

class ruleInfo extends Model
{
    /**
     * @description The name of the application to which the live stream belongs.
     *
     * @example App Name
     *
     * @var string
     */
    public $app;

    /**
     * @description The description of the rule.
     *
     * @example live AI subtitle template
     *
     * @var string
     */
    public $description;

    /**
     * @description The streaming domain.
     *
     * @example demo.aliyundoc.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The last time when the rule was modified. The value is a timestamp.
     *
     * @example 1715594344000
     *
     * @var string
     */
    public $gmtModifyTime;

    /**
     * @description Indicates whether the rule takes effect when stream pulling starts.
     *
     * @example true
     *
     * @var bool
     */
    public $isLazy;

    /**
     * @description The specification of the exported subtitles.
     *
     * @example lp_ld
     *
     * @var string
     */
    public $liveTemplate;

    /**
     * @description The ID of the subtitle rule.
     *
     * @example 72fba656-2cc2-40fd-923c-2a10c3b9****
     *
     * @var string
     */
    public $rulesId;

    /**
     * @description The name of the virtual background template.
     *
     * @example test0708
     *
     * @var string
     */
    public $studioName;

    /**
     * @description The name of the subtitle template.
     *
     * @example sub1
     *
     * @var string
     */
    public $subtitleName;

    /**
     * @description The suffix of the subtitle rule.
     *
     * @example test0506
     *
     * @var string
     */
    public $suffixName;
    protected $_name = [
        'app' => 'App',
        'description' => 'Description',
        'domain' => 'Domain',
        'gmtModifyTime' => 'GmtModifyTime',
        'isLazy' => 'IsLazy',
        'liveTemplate' => 'LiveTemplate',
        'rulesId' => 'RulesId',
        'studioName' => 'StudioName',
        'subtitleName' => 'SubtitleName',
        'suffixName' => 'SuffixName',
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
        if (null !== $this->gmtModifyTime) {
            $res['GmtModifyTime'] = $this->gmtModifyTime;
        }
        if (null !== $this->isLazy) {
            $res['IsLazy'] = $this->isLazy;
        }
        if (null !== $this->liveTemplate) {
            $res['LiveTemplate'] = $this->liveTemplate;
        }
        if (null !== $this->rulesId) {
            $res['RulesId'] = $this->rulesId;
        }
        if (null !== $this->studioName) {
            $res['StudioName'] = $this->studioName;
        }
        if (null !== $this->subtitleName) {
            $res['SubtitleName'] = $this->subtitleName;
        }
        if (null !== $this->suffixName) {
            $res['SuffixName'] = $this->suffixName;
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
        if (isset($map['GmtModifyTime'])) {
            $model->gmtModifyTime = $map['GmtModifyTime'];
        }
        if (isset($map['IsLazy'])) {
            $model->isLazy = $map['IsLazy'];
        }
        if (isset($map['LiveTemplate'])) {
            $model->liveTemplate = $map['LiveTemplate'];
        }
        if (isset($map['RulesId'])) {
            $model->rulesId = $map['RulesId'];
        }
        if (isset($map['StudioName'])) {
            $model->studioName = $map['StudioName'];
        }
        if (isset($map['SubtitleName'])) {
            $model->subtitleName = $map['SubtitleName'];
        }
        if (isset($map['SuffixName'])) {
            $model->suffixName = $map['SuffixName'];
        }

        return $model;
    }
}
