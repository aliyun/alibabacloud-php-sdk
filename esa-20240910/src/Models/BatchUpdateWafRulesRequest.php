<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class BatchUpdateWafRulesRequest extends Model
{
    /**
     * @var WafRuleConfig[]
     */
    public $configs;

    /**
     * @var string
     */
    public $phase;

    /**
     * @var int
     */
    public $rulesetId;

    /**
     * @var WafBatchRuleShared
     */
    public $shared;

    /**
     * @var int
     */
    public $siteId;

    /**
     * @var int
     */
    public $siteVersion;
    protected $_name = [
        'configs' => 'Configs',
        'phase' => 'Phase',
        'rulesetId' => 'RulesetId',
        'shared' => 'Shared',
        'siteId' => 'SiteId',
        'siteVersion' => 'SiteVersion',
    ];

    public function validate()
    {
        if (\is_array($this->configs)) {
            Model::validateArray($this->configs);
        }
        if (null !== $this->shared) {
            $this->shared->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configs) {
            if (\is_array($this->configs)) {
                $res['Configs'] = [];
                $n1 = 0;
                foreach ($this->configs as $item1) {
                    $res['Configs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
        }

        if (null !== $this->rulesetId) {
            $res['RulesetId'] = $this->rulesetId;
        }

        if (null !== $this->shared) {
            $res['Shared'] = null !== $this->shared ? $this->shared->toArray($noStream) : $this->shared;
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        if (null !== $this->siteVersion) {
            $res['SiteVersion'] = $this->siteVersion;
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
        if (isset($map['Configs'])) {
            if (!empty($map['Configs'])) {
                $model->configs = [];
                $n1 = 0;
                foreach ($map['Configs'] as $item1) {
                    $model->configs[$n1++] = WafRuleConfig::fromMap($item1);
                }
            }
        }

        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }

        if (isset($map['RulesetId'])) {
            $model->rulesetId = $map['RulesetId'];
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
