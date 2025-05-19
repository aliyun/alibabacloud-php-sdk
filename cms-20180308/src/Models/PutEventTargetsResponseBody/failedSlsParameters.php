<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20180308\Models\PutEventTargetsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20180308\Models\PutEventTargetsResponseBody\failedSlsParameters\failedSlsParameter;

class failedSlsParameters extends Model
{
    /**
     * @var failedSlsParameter[]
     */
    public $failedSlsParameter;
    protected $_name = [
        'failedSlsParameter' => 'FailedSlsParameter',
    ];

    public function validate()
    {
        if (\is_array($this->failedSlsParameter)) {
            Model::validateArray($this->failedSlsParameter);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedSlsParameter) {
            if (\is_array($this->failedSlsParameter)) {
                $res['FailedSlsParameter'] = [];
                $n1 = 0;
                foreach ($this->failedSlsParameter as $item1) {
                    $res['FailedSlsParameter'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FailedSlsParameter'])) {
            if (!empty($map['FailedSlsParameter'])) {
                $model->failedSlsParameter = [];
                $n1 = 0;
                foreach ($map['FailedSlsParameter'] as $item1) {
                    $model->failedSlsParameter[$n1++] = failedSlsParameter::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
