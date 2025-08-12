<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAIProduceRulesResponseBody\ruleInfoList;

use AlibabaCloud\Dara\Model;

class ruleInfo extends Model
{
    /**
     * @var string
     */
    public $app;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $gmtModifyTime;

    /**
     * @var bool
     */
    public $isLazy;

    /**
     * @var string
     */
    public $liveTemplate;

    /**
     * @var string
     */
    public $rulesId;

    /**
     * @var string
     */
    public $studioName;

    /**
     * @var string
     */
    public $subtitleName;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
