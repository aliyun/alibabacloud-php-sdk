<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSecurityGroupAttributeResponseBody;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSecurityGroupAttributeResponseBody\permissions\permission;
use AlibabaCloud\Tea\Model;

class permissions extends Model
{
    /**
     * @var permission[]
     */
    public $permission;
    protected $_name = [
        'permission' => 'Permission',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->permission) {
            $res['Permission'] = [];
            if (null !== $this->permission && \is_array($this->permission)) {
                $n = 0;
                foreach ($this->permission as $item) {
                    $res['Permission'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return permissions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Permission'])) {
            if (!empty($map['Permission'])) {
                $model->permission = [];
                $n                 = 0;
                foreach ($map['Permission'] as $item) {
                    $model->permission[$n++] = null !== $item ? permission::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
