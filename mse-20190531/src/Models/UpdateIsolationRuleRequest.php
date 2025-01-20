<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;

class UpdateIsolationRuleRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;
    /**
     * @var string
     */
    public $appId;
    /**
     * @var string
     */
    public $appName;
    /**
     * @var bool
     */
    public $enable;
    /**
     * @var string
     */
    public $limitApp;
    /**
     * @var string
     */
    public $namespace;
    /**
     * @var int
     */
    public $ruleId;
    /**
     * @var float
     */
    public $threshold;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'appId'          => 'AppId',
        'appName'        => 'AppName',
        'enable'         => 'Enable',
        'limitApp'       => 'LimitApp',
        'namespace'      => 'Namespace',
        'ruleId'         => 'RuleId',
        'threshold'      => 'Threshold',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->limitApp) {
            $res['LimitApp'] = $this->limitApp;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
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
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['LimitApp'])) {
            $model->limitApp = $map['LimitApp'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }

        return $model;
    }
}
