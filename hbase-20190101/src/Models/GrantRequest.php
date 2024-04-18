<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class GrantRequest extends Model
{
    /**
     * @example test01
     *
     * @var string
     */
    public $accountName;

    /**
     * @example READ,WRITE
     *
     * @var string
     */
    public $aclActions;

    /**
     * @example ld-bp150tns0sjxs****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @example table
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'accountName' => 'AccountName',
        'aclActions'  => 'AclActions',
        'clusterId'   => 'ClusterId',
        'namespace'   => 'Namespace',
        'tableName'   => 'TableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->aclActions) {
            $res['AclActions'] = $this->aclActions;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GrantRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['AclActions'])) {
            $model->aclActions = $map['AclActions'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
