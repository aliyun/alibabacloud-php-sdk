<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\GetDbProxyInstanceSslResponseBody\dbProxyCertListItems;
use AlibabaCloud\Tea\Model;

class GetDbProxyInstanceSslResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var dbProxyCertListItems
     */
    public $dbProxyCertListItems;
    protected $_name = [
        'requestId'            => 'RequestId',
        'dbProxyCertListItems' => 'DbProxyCertListItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->dbProxyCertListItems) {
            $res['DbProxyCertListItems'] = null !== $this->dbProxyCertListItems ? $this->dbProxyCertListItems->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDbProxyInstanceSslResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DbProxyCertListItems'])) {
            $model->dbProxyCertListItems = dbProxyCertListItems::fromMap($map['DbProxyCertListItems']);
        }

        return $model;
    }
}
