<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyEndpointResponseBody;

use AlibabaCloud\Tea\Model;

class DBProxyNodes extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyEndpointResponseBody\DBProxyNodes\DBProxyNodes[]
     */
    public $DBProxyNodes;
    protected $_name = [
        'DBProxyNodes' => 'DBProxyNodes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBProxyNodes) {
            $res['DBProxyNodes'] = [];
            if (null !== $this->DBProxyNodes && \is_array($this->DBProxyNodes)) {
                $n = 0;
                foreach ($this->DBProxyNodes as $item) {
                    $res['DBProxyNodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBProxyNodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBProxyNodes'])) {
            if (!empty($map['DBProxyNodes'])) {
                $model->DBProxyNodes = [];
                $n                   = 0;
                foreach ($map['DBProxyNodes'] as $item) {
                    $model->DBProxyNodes[$n++] = null !== $item ? \AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyEndpointResponseBody\DBProxyNodes\DBProxyNodes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
