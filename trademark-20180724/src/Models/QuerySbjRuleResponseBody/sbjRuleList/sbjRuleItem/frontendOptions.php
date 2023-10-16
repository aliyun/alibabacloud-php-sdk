<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QuerySbjRuleResponseBody\sbjRuleList\sbjRuleItem;

use AlibabaCloud\SDK\Trademark\V20180724\Models\QuerySbjRuleResponseBody\sbjRuleList\sbjRuleItem\frontendOptions\frontendOption;
use AlibabaCloud\Tea\Model;

class frontendOptions extends Model
{
    /**
     * @var frontendOption[]
     */
    public $frontendOption;
    protected $_name = [
        'frontendOption' => 'FrontendOption',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->frontendOption) {
            $res['FrontendOption'] = [];
            if (null !== $this->frontendOption && \is_array($this->frontendOption)) {
                $n = 0;
                foreach ($this->frontendOption as $item) {
                    $res['FrontendOption'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return frontendOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FrontendOption'])) {
            if (!empty($map['FrontendOption'])) {
                $model->frontendOption = [];
                $n                     = 0;
                foreach ($map['FrontendOption'] as $item) {
                    $model->frontendOption[$n++] = null !== $item ? frontendOption::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
