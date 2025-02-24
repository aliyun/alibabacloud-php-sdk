<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\PAL7Config;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\PAL7ConfigReplaceRule;

class responseRewriteConfig extends Model
{
    /**
     * @var string
     */
    public $mode;
    /**
     * @var PAL7ConfigReplaceRule[]
     */
    public $replaceRules;
    protected $_name = [
        'mode'         => 'Mode',
        'replaceRules' => 'ReplaceRules',
    ];

    public function validate()
    {
        if (\is_array($this->replaceRules)) {
            Model::validateArray($this->replaceRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->replaceRules) {
            if (\is_array($this->replaceRules)) {
                $res['ReplaceRules'] = [];
                $n1                  = 0;
                foreach ($this->replaceRules as $item1) {
                    $res['ReplaceRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['ReplaceRules'])) {
            if (!empty($map['ReplaceRules'])) {
                $model->replaceRules = [];
                $n1                  = 0;
                foreach ($map['ReplaceRules'] as $item1) {
                    $model->replaceRules[$n1++] = PAL7ConfigReplaceRule::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
