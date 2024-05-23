<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBInstancePromoteActivityResponseBody extends Model
{
    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 22973492**********
     *
     * @var string
     */
    public $aliUid;

    /**
     * @description *   China site: 26842
     *   International site: 26888
     *
     * @example 268**
     *
     * @var string
     */
    public $bid;

    /**
     * @description The instance ID. You can call the [DescribeDBInstances](https://help.aliyun.com/document_detail/26232.html) operation to query the instance ID.
     *
     * @example rm-uf6wjk5xxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The instance name.
     *
     * @example rm-uf6wjk5xxxxxxx
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @description The type of the database engine. Valid values:
     *
     *   **MySQL**
     *   **PostgreSQL**
     *   **Oracle**
     *
     * @example MySQL
     *
     * @var string
     */
    public $DBType;

    /**
     * @description The activity information about the instance. For more information, see [Instance activities](https://help.aliyun.com/document_detail/2391834.html).
     *
     * @example 1
     *
     * @var string
     */
    public $isActivity;

    /**
     * @description The request ID.
     *
     * @example 94CB8D93-017A-5AE7-A118-6E0F89D93C0A
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'aliUid'         => 'AliUid',
        'bid'            => 'Bid',
        'DBInstanceId'   => 'DBInstanceId',
        'DBInstanceName' => 'DBInstanceName',
        'DBType'         => 'DBType',
        'isActivity'     => 'IsActivity',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->bid) {
            $res['Bid'] = $this->bid;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->DBType) {
            $res['DBType'] = $this->DBType;
        }
        if (null !== $this->isActivity) {
            $res['IsActivity'] = $this->isActivity;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstancePromoteActivityResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['Bid'])) {
            $model->bid = $map['Bid'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['DBType'])) {
            $model->DBType = $map['DBType'];
        }
        if (isset($map['IsActivity'])) {
            $model->isActivity = $map['IsActivity'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
