<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetDBAuditCountListResponseBody;

use AlibabaCloud\Tea\Model;

class dbList extends Model
{
    /**
     * @var int
     */
    public $sessionCount;

    /**
     * @var int
     */
    public $dbId;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var int
     */
    public $dbType;

    /**
     * @var int
     */
    public $sqlCount;

    /**
     * @var string
     */
    public $dbTypeName;

    /**
     * @var int
     */
    public $riskCount;

    /**
     * @var string
     */
    public $dbVersionName;

    /**
     * @var int
     */
    public $assetType;

    /**
     * @var int
     */
    public $dbVersion;

    /**
     * @var string[]
     */
    public $dbAddresses;
    protected $_name = [
        'sessionCount'  => 'SessionCount',
        'dbId'          => 'DbId',
        'dbName'        => 'DbName',
        'dbType'        => 'DbType',
        'sqlCount'      => 'SqlCount',
        'dbTypeName'    => 'DbTypeName',
        'riskCount'     => 'RiskCount',
        'dbVersionName' => 'DbVersionName',
        'assetType'     => 'AssetType',
        'dbVersion'     => 'DbVersion',
        'dbAddresses'   => 'DbAddresses',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sessionCount) {
            $res['SessionCount'] = $this->sessionCount;
        }
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->sqlCount) {
            $res['SqlCount'] = $this->sqlCount;
        }
        if (null !== $this->dbTypeName) {
            $res['DbTypeName'] = $this->dbTypeName;
        }
        if (null !== $this->riskCount) {
            $res['RiskCount'] = $this->riskCount;
        }
        if (null !== $this->dbVersionName) {
            $res['DbVersionName'] = $this->dbVersionName;
        }
        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }
        if (null !== $this->dbVersion) {
            $res['DbVersion'] = $this->dbVersion;
        }
        if (null !== $this->dbAddresses) {
            $res['DbAddresses'] = $this->dbAddresses;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dbList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SessionCount'])) {
            $model->sessionCount = $map['SessionCount'];
        }
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['SqlCount'])) {
            $model->sqlCount = $map['SqlCount'];
        }
        if (isset($map['DbTypeName'])) {
            $model->dbTypeName = $map['DbTypeName'];
        }
        if (isset($map['RiskCount'])) {
            $model->riskCount = $map['RiskCount'];
        }
        if (isset($map['DbVersionName'])) {
            $model->dbVersionName = $map['DbVersionName'];
        }
        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }
        if (isset($map['DbVersion'])) {
            $model->dbVersion = $map['DbVersion'];
        }
        if (isset($map['DbAddresses'])) {
            if (!empty($map['DbAddresses'])) {
                $model->dbAddresses = $map['DbAddresses'];
            }
        }

        return $model;
    }
}
