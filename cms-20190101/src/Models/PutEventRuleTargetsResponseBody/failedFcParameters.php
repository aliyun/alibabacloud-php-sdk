<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\PutEventRuleTargetsResponseBody\failedFcParameters\fcParameter;

class failedFcParameters extends Model
{
    /**
     * @var fcParameter[]
     */
    public $fcParameter;
    protected $_name = [
        'fcParameter' => 'FcParameter',
    ];

    public function validate()
    {
        if (\is_array($this->fcParameter)) {
            Model::validateArray($this->fcParameter);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fcParameter) {
            if (\is_array($this->fcParameter)) {
                $res['FcParameter'] = [];
                $n1 = 0;
                foreach ($this->fcParameter as $item1) {
                    $res['FcParameter'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FcParameter'])) {
            if (!empty($map['FcParameter'])) {
                $model->fcParameter = [];
                $n1 = 0;
                foreach ($map['FcParameter'] as $item1) {
                    $model->fcParameter[$n1] = fcParameter::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
