<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\SDK\DataLake\V20200710\Models\CatalogVpcConnection\zones;
use AlibabaCloud\Tea\Model;

class CatalogVpcConnection extends Model
{
    /**
     * @example catalog_test
     *
     * @var string
     */
    public $catalogId;

    /**
     * @var string
     */
    public $connectionName;

    /**
     * @example CONNECTED
     *
     * @var string
     */
    public $connectionStatus;

    /**
     * @example 120215474170****
     *
     * @var int
     */
    public $creator;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @example 2023-07-12 15:26:12
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2023-07-17 17:51:04
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $jdbcUri;

    /**
     * @example 120215474170****
     *
     * @var int
     */
    public $modifier;

    /**
     * @example 120215474170****
     *
     * @var int
     */
    public $owner;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $securityGroupIds;

    /**
     * @var string
     */
    public $thriftUri;

    /**
     * @example CONN-607A0053D874****
     *
     * @var string
     */
    public $vpcConnectionId;

    /**
     * @example vpc-2ze0c41hvmesel7pu****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @var zones[]
     */
    public $zones;
    protected $_name = [
        'catalogId'        => 'CatalogId',
        'connectionName'   => 'ConnectionName',
        'connectionStatus' => 'ConnectionStatus',
        'creator'          => 'Creator',
        'errorMessage'     => 'ErrorMessage',
        'gmtCreate'        => 'GmtCreate',
        'gmtModified'      => 'GmtModified',
        'jdbcUri'          => 'JdbcUri',
        'modifier'         => 'Modifier',
        'owner'            => 'Owner',
        'regionId'         => 'RegionId',
        'securityGroupIds' => 'SecurityGroupIds',
        'thriftUri'        => 'ThriftUri',
        'vpcConnectionId'  => 'VpcConnectionId',
        'vpcId'            => 'VpcId',
        'zones'            => 'Zones',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->catalogId) {
            $res['CatalogId'] = $this->catalogId;
        }
        if (null !== $this->connectionName) {
            $res['ConnectionName'] = $this->connectionName;
        }
        if (null !== $this->connectionStatus) {
            $res['ConnectionStatus'] = $this->connectionStatus;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->jdbcUri) {
            $res['JdbcUri'] = $this->jdbcUri;
        }
        if (null !== $this->modifier) {
            $res['Modifier'] = $this->modifier;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->securityGroupIds) {
            $res['SecurityGroupIds'] = $this->securityGroupIds;
        }
        if (null !== $this->thriftUri) {
            $res['ThriftUri'] = $this->thriftUri;
        }
        if (null !== $this->vpcConnectionId) {
            $res['VpcConnectionId'] = $this->vpcConnectionId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zones) {
            $res['Zones'] = [];
            if (null !== $this->zones && \is_array($this->zones)) {
                $n = 0;
                foreach ($this->zones as $item) {
                    $res['Zones'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CatalogVpcConnection
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CatalogId'])) {
            $model->catalogId = $map['CatalogId'];
        }
        if (isset($map['ConnectionName'])) {
            $model->connectionName = $map['ConnectionName'];
        }
        if (isset($map['ConnectionStatus'])) {
            $model->connectionStatus = $map['ConnectionStatus'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['JdbcUri'])) {
            $model->jdbcUri = $map['JdbcUri'];
        }
        if (isset($map['Modifier'])) {
            $model->modifier = $map['Modifier'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SecurityGroupIds'])) {
            if (!empty($map['SecurityGroupIds'])) {
                $model->securityGroupIds = $map['SecurityGroupIds'];
            }
        }
        if (isset($map['ThriftUri'])) {
            $model->thriftUri = $map['ThriftUri'];
        }
        if (isset($map['VpcConnectionId'])) {
            $model->vpcConnectionId = $map['VpcConnectionId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['Zones'])) {
            if (!empty($map['Zones'])) {
                $model->zones = [];
                $n            = 0;
                foreach ($map['Zones'] as $item) {
                    $model->zones[$n++] = null !== $item ? zones::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
