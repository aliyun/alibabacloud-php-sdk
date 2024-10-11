<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20220101\Models\DescribeClusterSecurityInfoResponseBody;

use AlibabaCloud\SDK\Clickhouse\V20220101\Models\DescribeClusterSecurityInfoResponseBody\data\securityIpGroups;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var securityIpGroups[]
     */
    public $securityIpGroups;
    protected $_name = [
        'securityIpGroups' => 'SecurityIpGroups',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityIpGroups) {
            $res['SecurityIpGroups'] = [];
            if (null !== $this->securityIpGroups && \is_array($this->securityIpGroups)) {
                $n = 0;
                foreach ($this->securityIpGroups as $item) {
                    $res['SecurityIpGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityIpGroups'])) {
            if (!empty($map['SecurityIpGroups'])) {
                $model->securityIpGroups = [];
                $n                       = 0;
                foreach ($map['SecurityIpGroups'] as $item) {
                    $model->securityIpGroups[$n++] = null !== $item ? securityIpGroups::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
