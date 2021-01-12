<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\GetDbProxyInstanceSslResponseBody;

use AlibabaCloud\SDK\Rds\V20140815\Models\GetDbProxyInstanceSslResponseBody\dbProxyCertListItems\dbProxyCertListItems;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbProxyCertListItems) {
            $res['DbProxyCertListItems'] = [];
            if (null !== $this->dbProxyCertListItems && \is_array($this->dbProxyCertListItems)) {
                $n = 0;
                foreach ($this->dbProxyCertListItems as $item) {
                    $res['DbProxyCertListItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dbProxyCertListItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbProxyCertListItems'])) {
            if (!empty($map['DbProxyCertListItems'])) {
                $model->dbProxyCertListItems = [];
                $n                           = 0;
                foreach ($map['DbProxyCertListItems'] as $item) {
                    $model->dbProxyCertListItems[$n++] = null !== $item ? self::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
