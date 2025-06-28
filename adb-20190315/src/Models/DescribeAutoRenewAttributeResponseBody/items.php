<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAutoRenewAttributeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAutoRenewAttributeResponseBody\items\autoRenewAttribute;

class items extends Model
{
    /**
     * @var autoRenewAttribute[]
     */
    public $autoRenewAttribute;
    protected $_name = [
        'autoRenewAttribute' => 'AutoRenewAttribute',
    ];

    public function validate()
    {
        if (\is_array($this->autoRenewAttribute)) {
            Model::validateArray($this->autoRenewAttribute);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoRenewAttribute) {
            if (\is_array($this->autoRenewAttribute)) {
                $res['AutoRenewAttribute'] = [];
                $n1 = 0;
                foreach ($this->autoRenewAttribute as $item1) {
                    $res['AutoRenewAttribute'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AutoRenewAttribute'])) {
            if (!empty($map['AutoRenewAttribute'])) {
                $model->autoRenewAttribute = [];
                $n1 = 0;
                foreach ($map['AutoRenewAttribute'] as $item1) {
                    $model->autoRenewAttribute[$n1] = autoRenewAttribute::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
