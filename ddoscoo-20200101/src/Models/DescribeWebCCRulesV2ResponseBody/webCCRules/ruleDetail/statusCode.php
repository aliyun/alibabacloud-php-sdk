<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCCRulesV2ResponseBody\webCCRules\ruleDetail;

use AlibabaCloud\Dara\Model;

class statusCode extends Model
{
    /**
     * @var int
     */
    public $code;

    /**
     * @var int
     */
    public $countThreshold;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var int
     */
    public $ratioThreshold;

    /**
     * @var bool
     */
    public $useRatio;
    protected $_name = [
        'code' => 'Code',
        'countThreshold' => 'CountThreshold',
        'enabled' => 'Enabled',
        'ratioThreshold' => 'RatioThreshold',
        'useRatio' => 'UseRatio',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->countThreshold) {
            $res['CountThreshold'] = $this->countThreshold;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->ratioThreshold) {
            $res['RatioThreshold'] = $this->ratioThreshold;
        }

        if (null !== $this->useRatio) {
            $res['UseRatio'] = $this->useRatio;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['CountThreshold'])) {
            $model->countThreshold = $map['CountThreshold'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['RatioThreshold'])) {
            $model->ratioThreshold = $map['RatioThreshold'];
        }

        if (isset($map['UseRatio'])) {
            $model->useRatio = $map['UseRatio'];
        }

        return $model;
    }
}
