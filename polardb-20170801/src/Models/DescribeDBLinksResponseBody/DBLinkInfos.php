<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBLinksResponseBody;

use AlibabaCloud\Tea\Model;

class DBLinkInfos extends Model
{
    /**
     * @description The ID of the source cluster that the database link connects.
     *
     * @example pc-a*************
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @description The name of the database link.
     *
     * @example dblink_test
     *
     * @var string
     */
    public $DBLinkName;

    /**
     * @description The name of the source database of the database link.
     *
     * @example testdb1
     *
     * @var string
     */
    public $sourceDBName;

    /**
     * @description The account of the destination database of the database link.
     *
     * @example testacc
     *
     * @var string
     */
    public $targetAccount;

    /**
     * @description The ID of the destination cluster that the database link connects.
     *
     * > If the destination cluster is not a PolarDB for Oracle cluster, the returned value is empty.
     * @example pc-b************
     *
     * @var string
     */
    public $targetDBInstanceName;

    /**
     * @description The name of the destination database of the database link.
     *
     * @example testdb2
     *
     * @var string
     */
    public $targetDBName;
    protected $_name = [
        'DBInstanceName'       => 'DBInstanceName',
        'DBLinkName'           => 'DBLinkName',
        'sourceDBName'         => 'SourceDBName',
        'targetAccount'        => 'TargetAccount',
        'targetDBInstanceName' => 'TargetDBInstanceName',
        'targetDBName'         => 'TargetDBName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->DBLinkName) {
            $res['DBLinkName'] = $this->DBLinkName;
        }
        if (null !== $this->sourceDBName) {
            $res['SourceDBName'] = $this->sourceDBName;
        }
        if (null !== $this->targetAccount) {
            $res['TargetAccount'] = $this->targetAccount;
        }
        if (null !== $this->targetDBInstanceName) {
            $res['TargetDBInstanceName'] = $this->targetDBInstanceName;
        }
        if (null !== $this->targetDBName) {
            $res['TargetDBName'] = $this->targetDBName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBLinkInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['DBLinkName'])) {
            $model->DBLinkName = $map['DBLinkName'];
        }
        if (isset($map['SourceDBName'])) {
            $model->sourceDBName = $map['SourceDBName'];
        }
        if (isset($map['TargetAccount'])) {
            $model->targetAccount = $map['TargetAccount'];
        }
        if (isset($map['TargetDBInstanceName'])) {
            $model->targetDBInstanceName = $map['TargetDBInstanceName'];
        }
        if (isset($map['TargetDBName'])) {
            $model->targetDBName = $map['TargetDBName'];
        }

        return $model;
    }
}
