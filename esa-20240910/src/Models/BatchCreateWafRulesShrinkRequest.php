<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class BatchCreateWafRulesShrinkRequest extends Model
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
