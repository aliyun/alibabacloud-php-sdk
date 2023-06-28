<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class InnerRewriteConfig extends Model
{
    /**
     * @var RewriteRegexRule[]
     */
    public $regexRules;
    protected $_name = [
        'regexRules' => 'regexRules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regexRules) {
            $res['regexRules'] = [];
            if (null !== $this->regexRules && \is_array($this->regexRules)) {
                $n = 0;
                foreach ($this->regexRules as $item) {
                    $res['regexRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InnerRewriteConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['regexRules'])) {
            if (!empty($map['regexRules'])) {
                $model->regexRules = [];
                $n                 = 0;
                foreach ($map['regexRules'] as $item) {
                    $model->regexRules[$n++] = null !== $item ? RewriteRegexRule::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
