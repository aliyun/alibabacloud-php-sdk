<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\containerGroups;

use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos\containerGroups\eciSecurityContext\sysctls;
use AlibabaCloud\Tea\Model;

class eciSecurityContext extends Model
{
    /**
     * @description The Sysctl parameters.
     *
     * @var sysctls[]
     */
    public $sysctls;
    protected $_name = [
        'sysctls' => 'Sysctls',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sysctls) {
            $res['Sysctls'] = [];
            if (null !== $this->sysctls && \is_array($this->sysctls)) {
                $n = 0;
                foreach ($this->sysctls as $item) {
                    $res['Sysctls'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eciSecurityContext
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Sysctls'])) {
            if (!empty($map['Sysctls'])) {
                $model->sysctls = [];
                $n              = 0;
                foreach ($map['Sysctls'] as $item) {
                    $model->sysctls[$n++] = null !== $item ? sysctls::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
