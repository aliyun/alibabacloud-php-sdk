<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\WafRuleConfig\actions;

use AlibabaCloud\Tea\Model;

class bypass extends Model
{
    /**
     * @var int[]
     */
    public $regularRules;

    /**
     * @var string[]
     */
    public $regularTypes;

    /**
     * @var string
     */
    public $skip;

    /**
     * @var string[]
     */
    public $tags;
    protected $_name = [
        'regularRules' => 'RegularRules',
        'regularTypes' => 'RegularTypes',
        'skip'         => 'Skip',
        'tags'         => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regularRules) {
            $res['RegularRules'] = $this->regularRules;
        }
        if (null !== $this->regularTypes) {
            $res['RegularTypes'] = $this->regularTypes;
        }
        if (null !== $this->skip) {
            $res['Skip'] = $this->skip;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bypass
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegularRules'])) {
            if (!empty($map['RegularRules'])) {
                $model->regularRules = $map['RegularRules'];
            }
        }
        if (isset($map['RegularTypes'])) {
            if (!empty($map['RegularTypes'])) {
                $model->regularTypes = $map['RegularTypes'];
            }
        }
        if (isset($map['Skip'])) {
            $model->skip = $map['Skip'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = $map['Tags'];
            }
        }

        return $model;
    }
}
