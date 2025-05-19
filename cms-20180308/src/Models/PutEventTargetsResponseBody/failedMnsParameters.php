<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20180308\Models\PutEventTargetsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20180308\Models\PutEventTargetsResponseBody\failedMnsParameters\mnsParameter;

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
        if (\is_array($this->mnsParameter)) {
            Model::validateArray($this->mnsParameter);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mnsParameter) {
            if (\is_array($this->mnsParameter)) {
                $res['MnsParameter'] = [];
                $n1 = 0;
                foreach ($this->mnsParameter as $item1) {
                    $res['MnsParameter'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MnsParameter'])) {
            if (!empty($map['MnsParameter'])) {
                $model->mnsParameter = [];
                $n1 = 0;
                foreach ($map['MnsParameter'] as $item1) {
                    $model->mnsParameter[$n1++] = mnsParameter::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
