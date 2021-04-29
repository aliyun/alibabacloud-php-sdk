<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyResponseBody;

use AlibabaCloud\Tea\Model;

class dbProxyEndpointItems extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyResponseBody\dbProxyEndpointItems\dbProxyEndpointItems[]
     */
    public $dbProxyEndpointItems;
    protected $_name = [
        'dbProxyEndpointItems' => 'DbProxyEndpointItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbProxyEndpointItems) {
            $res['DbProxyEndpointItems'] = [];
            if (null !== $this->dbProxyEndpointItems && \is_array($this->dbProxyEndpointItems)) {
                $n = 0;
                foreach ($this->dbProxyEndpointItems as $item) {
                    $res['DbProxyEndpointItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dbProxyEndpointItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbProxyEndpointItems'])) {
            if (!empty($map['DbProxyEndpointItems'])) {
                $model->dbProxyEndpointItems = [];
                $n                           = 0;
                foreach ($map['DbProxyEndpointItems'] as $item) {
                    $model->dbProxyEndpointItems[$n++] = null !== $item ? \AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyResponseBody\dbProxyEndpointItems\dbProxyEndpointItems::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
