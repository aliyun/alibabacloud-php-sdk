<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeAdvicesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeAdvicesResponseBody\data\advice;

class data extends Model
{
    /**
     * @var advice[]
     */
    public $advice;
    protected $_name = [
        'advice' => 'Advice',
    ];

    public function validate()
    {
        if (\is_array($this->advice)) {
            Model::validateArray($this->advice);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->advice) {
            if (\is_array($this->advice)) {
                $res['Advice'] = [];
                $n1 = 0;
                foreach ($this->advice as $item1) {
                    $res['Advice'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Advice'])) {
            if (!empty($map['Advice'])) {
                $model->advice = [];
                $n1 = 0;
                foreach ($map['Advice'] as $item1) {
                    $model->advice[$n1++] = advice::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
