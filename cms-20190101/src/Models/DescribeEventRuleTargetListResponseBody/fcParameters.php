<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponseBody;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeEventRuleTargetListResponseBody\fcParameters\FCParameter;
use AlibabaCloud\Tea\Model;

class fcParameters extends Model
{
    /**
     * @var FCParameter[]
     */
    public $FCParameter;
    protected $_name = [
        'FCParameter' => 'FCParameter',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->FCParameter) {
            $res['FCParameter'] = [];
            if (null !== $this->FCParameter && \is_array($this->FCParameter)) {
                $n = 0;
                foreach ($this->FCParameter as $item) {
                    $res['FCParameter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fcParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FCParameter'])) {
            if (!empty($map['FCParameter'])) {
                $model->FCParameter = [];
                $n                  = 0;
                foreach ($map['FCParameter'] as $item) {
                    $model->FCParameter[$n++] = null !== $item ? FCParameter::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
