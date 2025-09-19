<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class SetSensitiveDefineRuleConfigRequest extends Model
{
    /**
     * @var string
     */
    public $config;

    /**
     * @var int
     */
    public $enableNewRule;

    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'config' => 'Config',
        'enableNewRule' => 'EnableNewRule',
        'source' => 'Source',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }

        if (null !== $this->enableNewRule) {
            $res['EnableNewRule'] = $this->enableNewRule;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
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
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }

        if (isset($map['EnableNewRule'])) {
            $model->enableNewRule = $map['EnableNewRule'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
