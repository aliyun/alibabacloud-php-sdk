<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDTCSecurityIpHostsForSQLServerResponseBody\items;
use AlibabaCloud\Tea\Model;

class DescribeDTCSecurityIpHostsForSQLServerResponseBody extends Model
{
    /**
     * @description The instance ID.
     *
     * @example rm-uf6wjk5xxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The number of distributed transaction whitelists.
     *
     * @example 1
     *
     * @var string
     */
    public $ipHostPairNum;

    /**
     * @description Details of distributed transaction whitelists.
     *
     * @var items
     */
    public $items;

    /**
     * @description The request ID.
     *
     * @example 2CA62A70-2203-45C6-8E90-8971D5ACC0C2
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBInstanceId'  => 'DBInstanceId',
        'ipHostPairNum' => 'IpHostPairNum',
        'items'         => 'Items',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->ipHostPairNum) {
            $res['IpHostPairNum'] = $this->ipHostPairNum;
        }
        if (null !== $this->items) {
            $res['Items'] = null !== $this->items ? $this->items->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDTCSecurityIpHostsForSQLServerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['IpHostPairNum'])) {
            $model->ipHostPairNum = $map['IpHostPairNum'];
        }
        if (isset($map['Items'])) {
            $model->items = items::fromMap($map['Items']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
