<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class RewriteConfig extends Model
{
    /**
     * @var EqualRule[]
     */
    public $equalRules;

    /**
     * @var RegexRule[]
     */
    public $regexRules;

    /**
     * @var WildcardRule[]
     */
    public $wildcardRules;
    protected $_name = [
        'equalRules' => 'equalRules',
        'regexRules' => 'regexRules',
        'wildcardRules' => 'wildcardRules',
    ];

    public function validate()
    {
        if (\is_array($this->equalRules)) {
            Model::validateArray($this->equalRules);
        }
        if (\is_array($this->regexRules)) {
            Model::validateArray($this->regexRules);
        }
        if (\is_array($this->wildcardRules)) {
            Model::validateArray($this->wildcardRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->equalRules) {
            if (\is_array($this->equalRules)) {
                $res['equalRules'] = [];
                $n1 = 0;
                foreach ($this->equalRules as $item1) {
                    $res['equalRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->regexRules) {
            if (\is_array($this->regexRules)) {
                $res['regexRules'] = [];
                $n1 = 0;
                foreach ($this->regexRules as $item1) {
                    $res['regexRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->wildcardRules) {
            if (\is_array($this->wildcardRules)) {
                $res['wildcardRules'] = [];
                $n1 = 0;
                foreach ($this->wildcardRules as $item1) {
                    $res['wildcardRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['equalRules'])) {
            if (!empty($map['equalRules'])) {
                $model->equalRules = [];
                $n1 = 0;
                foreach ($map['equalRules'] as $item1) {
                    $model->equalRules[$n1++] = EqualRule::fromMap($item1);
                }
            }
        }

        if (isset($map['regexRules'])) {
            if (!empty($map['regexRules'])) {
                $model->regexRules = [];
                $n1 = 0;
                foreach ($map['regexRules'] as $item1) {
                    $model->regexRules[$n1++] = RegexRule::fromMap($item1);
                }
            }
        }

        if (isset($map['wildcardRules'])) {
            if (!empty($map['wildcardRules'])) {
                $model->wildcardRules = [];
                $n1 = 0;
                foreach ($map['wildcardRules'] as $item1) {
                    $model->wildcardRules[$n1++] = WildcardRule::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
