<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class BatchUpdateWafRulesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $configsShrink;

    /**
     * @example http_custom
     *
     * @var string
     */
    public $phase;

    /**
     * @example 10000001
     *
     * @var int
     */
    public $rulesetId;

    /**
     * @var string
     */
    public $sharedShrink;

    /**
     * @example 1
     *
     * @var int
     */
    public $siteId;

    /**
     * @var int
     */
    public $siteVersion;
    protected $_name = [
        'configsShrink' => 'Configs',
        'phase'         => 'Phase',
        'rulesetId'     => 'RulesetId',
        'sharedShrink'  => 'Shared',
        'siteId'        => 'SiteId',
        'siteVersion'   => 'SiteVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configsShrink) {
            $res['Configs'] = $this->configsShrink;
        }
        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
        }
        if (null !== $this->rulesetId) {
            $res['RulesetId'] = $this->rulesetId;
        }
        if (null !== $this->sharedShrink) {
            $res['Shared'] = $this->sharedShrink;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->siteVersion) {
            $res['SiteVersion'] = $this->siteVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchUpdateWafRulesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Configs'])) {
            $model->configsShrink = $map['Configs'];
        }
        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }
        if (isset($map['RulesetId'])) {
            $model->rulesetId = $map['RulesetId'];
        }
        if (isset($map['Shared'])) {
            $model->sharedShrink = $map['Shared'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['SiteVersion'])) {
            $model->siteVersion = $map['SiteVersion'];
        }

        return $model;
    }
}
