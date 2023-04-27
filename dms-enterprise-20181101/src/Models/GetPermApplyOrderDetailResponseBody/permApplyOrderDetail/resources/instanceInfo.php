<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetPermApplyOrderDetailResponseBody\permApplyOrderDetail\resources;

use AlibabaCloud\Tea\Model;

class instanceInfo extends Model
{
    /**
     * @example MySQL
     *
     * @var string
     */
    public $dbType;

    /**
     * @example 12345
     *
     * @var int
     */
    public $dbaId;

    /**
     * @example test_dba
     *
     * @var string
     */
    public $dbaNickName;

    /**
     * @example product
     *
     * @var string
     */
    public $envType;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $host;

    /**
     * @example 12345
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var int[]
     */
    public $ownerIds;

    /**
     * @var string[]
     */
    public $ownerNickName;

    /**
     * @example 3306
     *
     * @var int
     */
    public $port;

    /**
     * @example xxxx:3306
     *
     * @var string
     */
    public $searchName;
    protected $_name = [
        'dbType'        => 'DbType',
        'dbaId'         => 'DbaId',
        'dbaNickName'   => 'DbaNickName',
        'envType'       => 'EnvType',
        'host'          => 'Host',
        'instanceId'    => 'InstanceId',
        'ownerIds'      => 'OwnerIds',
        'ownerNickName' => 'OwnerNickName',
        'port'          => 'Port',
        'searchName'    => 'SearchName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->dbaId) {
            $res['DbaId'] = $this->dbaId;
        }
        if (null !== $this->dbaNickName) {
            $res['DbaNickName'] = $this->dbaNickName;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ownerIds) {
            $res['OwnerIds'] = $this->ownerIds;
        }
        if (null !== $this->ownerNickName) {
            $res['OwnerNickName'] = $this->ownerNickName;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->searchName) {
            $res['SearchName'] = $this->searchName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['DbaId'])) {
            $model->dbaId = $map['DbaId'];
        }
        if (isset($map['DbaNickName'])) {
            $model->dbaNickName = $map['DbaNickName'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OwnerIds'])) {
            if (!empty($map['OwnerIds'])) {
                $model->ownerIds = $map['OwnerIds'];
            }
        }
        if (isset($map['OwnerNickName'])) {
            if (!empty($map['OwnerNickName'])) {
                $model->ownerNickName = $map['OwnerNickName'];
            }
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['SearchName'])) {
            $model->searchName = $map['SearchName'];
        }

        return $model;
    }
}
