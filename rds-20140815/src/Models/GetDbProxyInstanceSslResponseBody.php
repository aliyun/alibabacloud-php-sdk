<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\GetDbProxyInstanceSslResponseBody\dbProxyCertListItems;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbProxyCertListItems) {
            $res['DbProxyCertListItems'] = null !== $this->dbProxyCertListItems ? $this->dbProxyCertListItems->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DbProxyCertListItems'])) {
            $model->dbProxyCertListItems = dbProxyCertListItems::fromMap($map['DbProxyCertListItems']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
