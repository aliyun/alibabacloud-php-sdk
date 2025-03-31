<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class UpdateCompressionRuleRequest extends Model
{
    /**
     * @var string
     */
    public $brotli;

    /**
     * @var int
     */
    public $configId;

    /**
     * @var string
     */
    public $gzip;

    /**
     * @var string
     */
    public $rule;

    /**
     * @var string
     */
    public $ruleEnable;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var int
     */
    public $sequence;

    /**
     * @var int
     */
    public $siteId;

    /**
     * @var string
     */
    public $zstd;
    protected $_name = [
        'brotli' => 'Brotli',
        'configId' => 'ConfigId',
        'gzip' => 'Gzip',
        'rule' => 'Rule',
        'ruleEnable' => 'RuleEnable',
        'ruleName' => 'RuleName',
        'sequence' => 'Sequence',
        'siteId' => 'SiteId',
        'zstd' => 'Zstd',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->brotli) {
            $res['Brotli'] = $this->brotli;
        }

        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }

        if (null !== $this->gzip) {
            $res['Gzip'] = $this->gzip;
        }

        if (null !== $this->rule) {
            $res['Rule'] = $this->rule;
        }

        if (null !== $this->ruleEnable) {
            $res['RuleEnable'] = $this->ruleEnable;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->sequence) {
            $res['Sequence'] = $this->sequence;
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        if (null !== $this->zstd) {
            $res['Zstd'] = $this->zstd;
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
        if (isset($map['Brotli'])) {
            $model->brotli = $map['Brotli'];
        }

        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }

        if (isset($map['Gzip'])) {
            $model->gzip = $map['Gzip'];
        }

        if (isset($map['Rule'])) {
            $model->rule = $map['Rule'];
        }

        if (isset($map['RuleEnable'])) {
            $model->ruleEnable = $map['RuleEnable'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['Sequence'])) {
            $model->sequence = $map['Sequence'];
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        if (isset($map['Zstd'])) {
            $model->zstd = $map['Zstd'];
        }

        return $model;
    }
}
