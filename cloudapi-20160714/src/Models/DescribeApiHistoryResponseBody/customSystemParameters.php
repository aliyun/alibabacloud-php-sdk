<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponseBody\customSystemParameters\customSystemParameter;

class customSystemParameters extends Model
{
    /**
     * @var customSystemParameter[]
     */
    public $customSystemParameter;
    protected $_name = [
        'customSystemParameter' => 'CustomSystemParameter',
    ];

    public function validate()
    {
        if (\is_array($this->customSystemParameter)) {
            Model::validateArray($this->customSystemParameter);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customSystemParameter) {
            if (\is_array($this->customSystemParameter)) {
                $res['CustomSystemParameter'] = [];
                $n1 = 0;
                foreach ($this->customSystemParameter as $item1) {
                    $res['CustomSystemParameter'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CustomSystemParameter'])) {
            if (!empty($map['CustomSystemParameter'])) {
                $model->customSystemParameter = [];
                $n1 = 0;
                foreach ($map['CustomSystemParameter'] as $item1) {
                    $model->customSystemParameter[$n1] = customSystemParameter::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
