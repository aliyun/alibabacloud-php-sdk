<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAutoRenewalAttributeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAutoRenewalAttributeResponseBody\items\autoRenewalAttribute;

class items extends Model
{
    /**
     * @var autoRenewalAttribute[]
     */
    public $autoRenewalAttribute;
    protected $_name = [
        'autoRenewalAttribute' => 'AutoRenewalAttribute',
    ];

    public function validate()
    {
        if (\is_array($this->autoRenewalAttribute)) {
            Model::validateArray($this->autoRenewalAttribute);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoRenewalAttribute) {
            if (\is_array($this->autoRenewalAttribute)) {
                $res['AutoRenewalAttribute'] = [];
                $n1 = 0;
                foreach ($this->autoRenewalAttribute as $item1) {
                    $res['AutoRenewalAttribute'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AutoRenewalAttribute'])) {
            if (!empty($map['AutoRenewalAttribute'])) {
                $model->autoRenewalAttribute = [];
                $n1 = 0;
                foreach ($map['AutoRenewalAttribute'] as $item1) {
                    $model->autoRenewalAttribute[$n1] = autoRenewalAttribute::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
