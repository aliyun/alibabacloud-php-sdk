<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\WafRuleConfig\actions;

use AlibabaCloud\Dara\Model;

class bypass extends Model
{
    /**
     * @var int[]
     */
    public $customRules;

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
        'customRules' => 'CustomRules',
        'regularRules' => 'RegularRules',
        'regularTypes' => 'RegularTypes',
        'skip' => 'Skip',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->customRules)) {
            Model::validateArray($this->customRules);
        }
        if (\is_array($this->regularRules)) {
            Model::validateArray($this->regularRules);
        }
        if (\is_array($this->regularTypes)) {
            Model::validateArray($this->regularTypes);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customRules) {
            if (\is_array($this->customRules)) {
                $res['CustomRules'] = [];
                $n1 = 0;
                foreach ($this->customRules as $item1) {
                    $res['CustomRules'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regularRules) {
            if (\is_array($this->regularRules)) {
                $res['RegularRules'] = [];
                $n1 = 0;
                foreach ($this->regularRules as $item1) {
                    $res['RegularRules'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regularTypes) {
            if (\is_array($this->regularTypes)) {
                $res['RegularTypes'] = [];
                $n1 = 0;
                foreach ($this->regularTypes as $item1) {
                    $res['RegularTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->skip) {
            $res['Skip'] = $this->skip;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['CustomRules'])) {
            if (!empty($map['CustomRules'])) {
                $model->customRules = [];
                $n1 = 0;
                foreach ($map['CustomRules'] as $item1) {
                    $model->customRules[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RegularRules'])) {
            if (!empty($map['RegularRules'])) {
                $model->regularRules = [];
                $n1 = 0;
                foreach ($map['RegularRules'] as $item1) {
                    $model->regularRules[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RegularTypes'])) {
            if (!empty($map['RegularTypes'])) {
                $model->regularTypes = [];
                $n1 = 0;
                foreach ($map['RegularTypes'] as $item1) {
                    $model->regularTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Skip'])) {
            $model->skip = $map['Skip'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
