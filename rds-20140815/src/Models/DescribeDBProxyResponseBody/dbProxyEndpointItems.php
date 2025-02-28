<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBProxyResponseBody\dbProxyEndpointItems\dbProxyEndpointItems;

class dbProxyEndpointItems extends Model
{
    /**
     * @var dbProxyEndpointItems[]
     */
    public $dbProxyEndpointItems;
    protected $_name = [
        'dbProxyEndpointItems' => 'DbProxyEndpointItems',
    ];

    public function validate()
    {
        if (\is_array($this->dbProxyEndpointItems)) {
            Model::validateArray($this->dbProxyEndpointItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbProxyEndpointItems) {
            if (\is_array($this->dbProxyEndpointItems)) {
                $res['DbProxyEndpointItems'] = [];
                $n1                          = 0;
                foreach ($this->dbProxyEndpointItems as $item1) {
                    $res['DbProxyEndpointItems'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DbProxyEndpointItems'])) {
            if (!empty($map['DbProxyEndpointItems'])) {
                $model->dbProxyEndpointItems = [];
                $n1                          = 0;
                foreach ($map['DbProxyEndpointItems'] as $item1) {
                    $model->dbProxyEndpointItems[$n1++] = self::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
