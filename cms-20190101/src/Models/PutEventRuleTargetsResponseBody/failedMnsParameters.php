<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsResponseBody;

use AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsResponseBody\failedMnsParameters\mnsParameter;
use AlibabaCloud\Tea\Model;

class failedMnsParameters extends Model
{
    /**
     * @var mnsParameter[]
     */
    public $mnsParameter;
    protected $_name = [
        'mnsParameter' => 'MnsParameter',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mnsParameter) {
            $res['MnsParameter'] = [];
            if (null !== $this->mnsParameter && \is_array($this->mnsParameter)) {
                $n = 0;
                foreach ($this->mnsParameter as $item) {
                    $res['MnsParameter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return failedMnsParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MnsParameter'])) {
            if (!empty($map['MnsParameter'])) {
                $model->mnsParameter = [];
                $n                   = 0;
                foreach ($map['MnsParameter'] as $item) {
                    $model->mnsParameter[$n++] = null !== $item ? mnsParameter::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
