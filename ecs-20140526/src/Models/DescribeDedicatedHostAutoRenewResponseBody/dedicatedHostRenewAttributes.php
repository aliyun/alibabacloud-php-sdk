<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostAutoRenewResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostAutoRenewResponseBody\dedicatedHostRenewAttributes\dedicatedHostRenewAttribute;

class dedicatedHostRenewAttributes extends Model
{
    /**
     * @var dedicatedHostRenewAttribute[]
     */
    public $dedicatedHostRenewAttribute;
    protected $_name = [
        'dedicatedHostRenewAttribute' => 'DedicatedHostRenewAttribute',
    ];

    public function validate()
    {
        if (\is_array($this->dedicatedHostRenewAttribute)) {
            Model::validateArray($this->dedicatedHostRenewAttribute);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dedicatedHostRenewAttribute) {
            if (\is_array($this->dedicatedHostRenewAttribute)) {
                $res['DedicatedHostRenewAttribute'] = [];
                $n1                                 = 0;
                foreach ($this->dedicatedHostRenewAttribute as $item1) {
                    $res['DedicatedHostRenewAttribute'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DedicatedHostRenewAttribute'])) {
            if (!empty($map['DedicatedHostRenewAttribute'])) {
                $model->dedicatedHostRenewAttribute = [];
                $n1                                 = 0;
                foreach ($map['DedicatedHostRenewAttribute'] as $item1) {
                    $model->dedicatedHostRenewAttribute[$n1++] = dedicatedHostRenewAttribute::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
