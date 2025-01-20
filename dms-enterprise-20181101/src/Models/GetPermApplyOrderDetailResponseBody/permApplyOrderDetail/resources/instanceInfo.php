<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetPermApplyOrderDetailResponseBody\permApplyOrderDetail\resources;

use AlibabaCloud\Dara\Model;

class instanceInfo extends Model
{
    /**
     * @var string
     */
    public $dbType;
    /**
     * @var int
     */
    public $dbaId;
    /**
     * @var string
     */
    public $dbaNickName;
    /**
     * @var string
     */
    public $envType;
    /**
     * @var string
     */
    public $host;
    /**
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
     * @var int
     */
    public $port;
    /**
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
        if (\is_array($this->ownerIds)) {
            Model::validateArray($this->ownerIds);
        }
        if (\is_array($this->ownerNickName)) {
            Model::validateArray($this->ownerNickName);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->ownerIds)) {
                $res['OwnerIds'] = [];
                $n1              = 0;
                foreach ($this->ownerIds as $item1) {
                    $res['OwnerIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->ownerNickName) {
            if (\is_array($this->ownerNickName)) {
                $res['OwnerNickName'] = [];
                $n1                   = 0;
                foreach ($this->ownerNickName as $item1) {
                    $res['OwnerNickName'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->searchName) {
            $res['SearchName'] = $this->searchName;
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
                $model->ownerIds = [];
                $n1              = 0;
                foreach ($map['OwnerIds'] as $item1) {
                    $model->ownerIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['OwnerNickName'])) {
            if (!empty($map['OwnerNickName'])) {
                $model->ownerNickName = [];
                $n1                   = 0;
                foreach ($map['OwnerNickName'] as $item1) {
                    $model->ownerNickName[$n1++] = $item1;
                }
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
