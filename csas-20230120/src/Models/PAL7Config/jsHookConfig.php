<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\PAL7Config;

use AlibabaCloud\SDK\Csas\V20230120\Models\PAL7ConfigReplaceRule;
use AlibabaCloud\Tea\Model;

class jsHookConfig extends Model
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
        'mode' => 'Mode',
        'replaceRules' => 'ReplaceRules',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->replaceRules) {
            $res['ReplaceRules'] = [];
            if (null !== $this->replaceRules && \is_array($this->replaceRules)) {
                $n = 0;
                foreach ($this->replaceRules as $item) {
                    $res['ReplaceRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jsHookConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['ReplaceRules'])) {
            if (!empty($map['ReplaceRules'])) {
                $model->replaceRules = [];
                $n = 0;
                foreach ($map['ReplaceRules'] as $item) {
                    $model->replaceRules[$n++] = null !== $item ? PAL7ConfigReplaceRule::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
