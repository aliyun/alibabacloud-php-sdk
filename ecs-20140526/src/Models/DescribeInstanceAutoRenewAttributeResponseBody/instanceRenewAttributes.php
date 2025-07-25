<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceAutoRenewAttributeResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceAutoRenewAttributeResponseBody\instanceRenewAttributes\instanceRenewAttribute;
use AlibabaCloud\Tea\Model;

class instanceRenewAttributes extends Model
{
    /**
     * @var instanceRenewAttribute[]
     */
    public $instanceRenewAttribute;
    protected $_name = [
        'instanceRenewAttribute' => 'InstanceRenewAttribute',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceRenewAttribute) {
            $res['InstanceRenewAttribute'] = [];
            if (null !== $this->instanceRenewAttribute && \is_array($this->instanceRenewAttribute)) {
                $n = 0;
                foreach ($this->instanceRenewAttribute as $item) {
                    $res['InstanceRenewAttribute'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceRenewAttributes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceRenewAttribute'])) {
            if (!empty($map['InstanceRenewAttribute'])) {
                $model->instanceRenewAttribute = [];
                $n = 0;
                foreach ($map['InstanceRenewAttribute'] as $item) {
                    $model->instanceRenewAttribute[$n++] = null !== $item ? instanceRenewAttribute::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
