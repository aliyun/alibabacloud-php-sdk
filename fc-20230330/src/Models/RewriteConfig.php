<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

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
        'equalRules'    => 'equalRules',
        'regexRules'    => 'regexRules',
        'wildcardRules' => 'wildcardRules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->equalRules) {
            $res['equalRules'] = [];
            if (null !== $this->equalRules && \is_array($this->equalRules)) {
                $n = 0;
                foreach ($this->equalRules as $item) {
                    $res['equalRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regexRules) {
            $res['regexRules'] = [];
            if (null !== $this->regexRules && \is_array($this->regexRules)) {
                $n = 0;
                foreach ($this->regexRules as $item) {
                    $res['regexRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->wildcardRules) {
            $res['wildcardRules'] = [];
            if (null !== $this->wildcardRules && \is_array($this->wildcardRules)) {
                $n = 0;
                foreach ($this->wildcardRules as $item) {
                    $res['wildcardRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RewriteConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['equalRules'])) {
            if (!empty($map['equalRules'])) {
                $model->equalRules = [];
                $n                 = 0;
                foreach ($map['equalRules'] as $item) {
                    $model->equalRules[$n++] = null !== $item ? EqualRule::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['regexRules'])) {
            if (!empty($map['regexRules'])) {
                $model->regexRules = [];
                $n                 = 0;
                foreach ($map['regexRules'] as $item) {
                    $model->regexRules[$n++] = null !== $item ? RegexRule::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['wildcardRules'])) {
            if (!empty($map['wildcardRules'])) {
                $model->wildcardRules = [];
                $n                    = 0;
                foreach ($map['wildcardRules'] as $item) {
                    $model->wildcardRules[$n++] = null !== $item ? WildcardRule::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
