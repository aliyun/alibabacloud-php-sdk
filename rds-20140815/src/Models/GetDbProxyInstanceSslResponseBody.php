<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\GetDbProxyInstanceSslResponseBody\dbProxyCertListItems;

class GetDbProxyInstanceSslResponseBody extends Model
{
    /**
     * @var dbProxyCertListItems
     */
    public $dbProxyCertListItems;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dbProxyCertListItems' => 'DbProxyCertListItems',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->dbProxyCertListItems) {
            $this->dbProxyCertListItems->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbProxyCertListItems) {
            $res['DbProxyCertListItems'] = null !== $this->dbProxyCertListItems ? $this->dbProxyCertListItems->toArray($noStream) : $this->dbProxyCertListItems;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
            $model->dbProxyCertListItems = dbProxyCertListItems::fromMap($map['DbProxyCertListItems']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
