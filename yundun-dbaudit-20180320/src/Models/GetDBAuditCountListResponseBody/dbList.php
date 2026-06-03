<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetDBAuditCountListResponseBody;

use AlibabaCloud\Dara\Model;

class dbList extends Model
{
    /**
     * @var int
     */
    public $assetType;

    /**
     * @var string[]
     */
    public $dbAddresses;

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
     * @var string
     */
    public $dbTypeName;

    /**
     * @var int
     */
    public $dbVersion;

    /**
     * @var string
     */
    public $dbVersionName;

    /**
     * @var int
     */
    public $riskCount;

    /**
     * @var int
     */
    public $sessionCount;

    /**
     * @var int
     */
    public $sqlCount;
    protected $_name = [
        'assetType' => 'AssetType',
        'dbAddresses' => 'DbAddresses',
        'dbId' => 'DbId',
        'dbName' => 'DbName',
        'dbType' => 'DbType',
        'dbTypeName' => 'DbTypeName',
        'dbVersion' => 'DbVersion',
        'dbVersionName' => 'DbVersionName',
        'riskCount' => 'RiskCount',
        'sessionCount' => 'SessionCount',
        'sqlCount' => 'SqlCount',
    ];

    public function validate()
    {
        if (\is_array($this->dbAddresses)) {
            Model::validateArray($this->dbAddresses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }

        if (null !== $this->dbAddresses) {
            if (\is_array($this->dbAddresses)) {
                $res['DbAddresses'] = [];
                $n1 = 0;
                foreach ($this->dbAddresses as $item1) {
                    $res['DbAddresses'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->dbTypeName) {
            $res['DbTypeName'] = $this->dbTypeName;
        }

        if (null !== $this->dbVersion) {
            $res['DbVersion'] = $this->dbVersion;
        }

        if (null !== $this->dbVersionName) {
            $res['DbVersionName'] = $this->dbVersionName;
        }

        if (null !== $this->riskCount) {
            $res['RiskCount'] = $this->riskCount;
        }

        if (null !== $this->sessionCount) {
            $res['SessionCount'] = $this->sessionCount;
        }

        if (null !== $this->sqlCount) {
            $res['SqlCount'] = $this->sqlCount;
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
        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }

        if (isset($map['DbAddresses'])) {
            if (!empty($map['DbAddresses'])) {
                $model->dbAddresses = [];
                $n1 = 0;
                foreach ($map['DbAddresses'] as $item1) {
                    $model->dbAddresses[$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['DbTypeName'])) {
            $model->dbTypeName = $map['DbTypeName'];
        }

        if (isset($map['DbVersion'])) {
            $model->dbVersion = $map['DbVersion'];
        }

        if (isset($map['DbVersionName'])) {
            $model->dbVersionName = $map['DbVersionName'];
        }

        if (isset($map['RiskCount'])) {
            $model->riskCount = $map['RiskCount'];
        }

        if (isset($map['SessionCount'])) {
            $model->sessionCount = $map['SessionCount'];
        }

        if (isset($map['SqlCount'])) {
            $model->sqlCount = $map['SqlCount'];
        }

        return $model;
    }
}
