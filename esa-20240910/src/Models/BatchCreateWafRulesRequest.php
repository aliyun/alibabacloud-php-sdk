<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class BatchCreateWafRulesRequest extends Model
{
    /**
     * @var WafRuleConfig[]
     */
    public $configs;

    /**
     * @example http_custom
     *
     * @var string
     */
    public $phase;

    /**
     * @var WafBatchRuleShared
     */
    public $shared;

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
        'configs'     => 'Configs',
        'phase'       => 'Phase',
        'shared'      => 'Shared',
        'siteId'      => 'SiteId',
        'siteVersion' => 'SiteVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configs) {
            $res['Configs'] = [];
            if (null !== $this->configs && \is_array($this->configs)) {
                $n = 0;
                foreach ($this->configs as $item) {
                    $res['Configs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
        }
        if (null !== $this->shared) {
            $res['Shared'] = null !== $this->shared ? $this->shared->toMap() : null;
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
     * @return BatchCreateWafRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Configs'])) {
            if (!empty($map['Configs'])) {
                $model->configs = [];
                $n              = 0;
                foreach ($map['Configs'] as $item) {
                    $model->configs[$n++] = null !== $item ? WafRuleConfig::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }
        if (isset($map['Shared'])) {
            $model->shared = WafBatchRuleShared::fromMap($map['Shared']);
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
