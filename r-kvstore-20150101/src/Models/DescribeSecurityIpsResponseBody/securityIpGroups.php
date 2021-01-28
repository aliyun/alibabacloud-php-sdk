<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeSecurityIpsResponseBody;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeSecurityIpsResponseBody\securityIpGroups\securityIpGroup;
use AlibabaCloud\Tea\Model;

class securityIpGroups extends Model
{
    /**
     * @var securityIpGroup[]
     */
    public $securityIpGroup;
    protected $_name = [
        'securityIpGroup' => 'SecurityIpGroup',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityIpGroup) {
            $res['SecurityIpGroup'] = [];
            if (null !== $this->securityIpGroup && \is_array($this->securityIpGroup)) {
                $n = 0;
                foreach ($this->securityIpGroup as $item) {
                    $res['SecurityIpGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityIpGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityIpGroup'])) {
            if (!empty($map['SecurityIpGroup'])) {
                $model->securityIpGroup = [];
                $n                      = 0;
                foreach ($map['SecurityIpGroup'] as $item) {
                    $model->securityIpGroup[$n++] = null !== $item ? securityIpGroup::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
