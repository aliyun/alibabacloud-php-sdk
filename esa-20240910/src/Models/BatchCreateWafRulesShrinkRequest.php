<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class BatchCreateWafRulesShrinkRequest extends Model
{
    /**
     * @description The configurations of the rules.
     *
     * @var string
     */
    public $configsShrink;

    /**
     * @description The WAF rule category.
     *
     * @example http_custom
     *
     * @var string
     */
    public $phase;

    /**
     * @description The configurations shared by multiple rules.
     *
     * @var string
     */
    public $sharedShrink;

    /**
     * @description The website ID, which can be obtained by calling the [ListSites](https://help.aliyun.com/document_detail/2850189.html) operation.
     *
     * @example 1
     *
     * @var int
     */
    public $siteId;

    /**
     * @description The version of the website.
     *
     * @example 0
     *
     * @var int
     */
    public $siteVersion;
    protected $_name = [
        'configsShrink' => 'Configs',
        'phase'         => 'Phase',
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
     * @return BatchCreateWafRulesShrinkRequest
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
