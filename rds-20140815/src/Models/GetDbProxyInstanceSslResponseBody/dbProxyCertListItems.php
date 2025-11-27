<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\GetDbProxyInstanceSslResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\GetDbProxyInstanceSslResponseBody\dbProxyCertListItems\dbProxyCertListItems;

class dbProxyCertListItems extends Model
{
    /**
     * @var dbProxyCertListItems[]
     */
    public $dbProxyCertListItems;
    protected $_name = [
        'dbProxyCertListItems' => 'DbProxyCertListItems',
    ];

    public function validate()
    {
        if (\is_array($this->dbProxyCertListItems)) {
            Model::validateArray($this->dbProxyCertListItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbProxyCertListItems) {
            if (\is_array($this->dbProxyCertListItems)) {
                $res['DbProxyCertListItems'] = [];
                $n1 = 0;
                foreach ($this->dbProxyCertListItems as $item1) {
                    $res['DbProxyCertListItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DbProxyCertListItems'])) {
            if (!empty($map['DbProxyCertListItems'])) {
                $model->dbProxyCertListItems = [];
                $n1 = 0;
                foreach ($map['DbProxyCertListItems'] as $item1) {
                    $model->dbProxyCertListItems[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
