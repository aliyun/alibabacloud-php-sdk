<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyEndpointResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyEndpointResponseBody\DBProxyNodes\DBProxyNodes;

class DBProxyNodes extends Model
{
    /**
     * @var DBProxyNodes[]
     */
    public $DBProxyNodes;
    protected $_name = [
        'DBProxyNodes' => 'DBProxyNodes',
    ];

    public function validate()
    {
        if (\is_array($this->DBProxyNodes)) {
            Model::validateArray($this->DBProxyNodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBProxyNodes) {
            if (\is_array($this->DBProxyNodes)) {
                $res['DBProxyNodes'] = [];
                $n1 = 0;
                foreach ($this->DBProxyNodes as $item1) {
                    $res['DBProxyNodes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DBProxyNodes'])) {
            if (!empty($map['DBProxyNodes'])) {
                $model->DBProxyNodes = [];
                $n1 = 0;
                foreach ($map['DBProxyNodes'] as $item1) {
                    $model->DBProxyNodes[$n1++] = self::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
