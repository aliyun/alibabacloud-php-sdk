<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyResponseBody\DBProxyConnectStringItems\DBProxyConnectStringItems;

class DBProxyConnectStringItems extends Model
{
    /**
     * @var DBProxyConnectStringItems[]
     */
    public $DBProxyConnectStringItems;
    protected $_name = [
        'DBProxyConnectStringItems' => 'DBProxyConnectStringItems',
    ];

    public function validate()
    {
        if (\is_array($this->DBProxyConnectStringItems)) {
            Model::validateArray($this->DBProxyConnectStringItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBProxyConnectStringItems) {
            if (\is_array($this->DBProxyConnectStringItems)) {
                $res['DBProxyConnectStringItems'] = [];
                $n1 = 0;
                foreach ($this->DBProxyConnectStringItems as $item1) {
                    $res['DBProxyConnectStringItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DBProxyConnectStringItems'])) {
            if (!empty($map['DBProxyConnectStringItems'])) {
                $model->DBProxyConnectStringItems = [];
                $n1 = 0;
                foreach ($map['DBProxyConnectStringItems'] as $item1) {
                    $model->DBProxyConnectStringItems[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
