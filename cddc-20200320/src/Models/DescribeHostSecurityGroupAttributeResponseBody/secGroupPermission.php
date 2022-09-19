<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeHostSecurityGroupAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class secGroupPermission extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeHostSecurityGroupAttributeResponseBody\secGroupPermission\secGroupPermission[]
     */
    public $secGroupPermission;
    protected $_name = [
        'secGroupPermission' => 'SecGroupPermission',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->secGroupPermission) {
            $res['SecGroupPermission'] = [];
            if (null !== $this->secGroupPermission && \is_array($this->secGroupPermission)) {
                $n = 0;
                foreach ($this->secGroupPermission as $item) {
                    $res['SecGroupPermission'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return secGroupPermission
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecGroupPermission'])) {
            if (!empty($map['SecGroupPermission'])) {
                $model->secGroupPermission = [];
                $n                         = 0;
                foreach ($map['SecGroupPermission'] as $item) {
                    $model->secGroupPermission[$n++] = null !== $item ? \AlibabaCloud\SDK\Cddc\V20200320\Models\DescribeHostSecurityGroupAttributeResponseBody\secGroupPermission\secGroupPermission::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
