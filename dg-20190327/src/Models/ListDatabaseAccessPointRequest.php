<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dg\V20190327\Models;

use AlibabaCloud\Tea\Model;

class ListDatabaseAccessPointRequest extends Model
{
    /**
     * @example dg-db-123
     *
     * @var string
     */
    public $dbInstanceId;

    /**
     * @example dg-123
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @example 127.XX.XX.1
     *
     * @var string
     */
    public $host;

    /**
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @example 20
     *
     * @var string
     */
    public $pageSize;

    /**
     * @example 3306
     *
     * @var int
     */
    public $port;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example dg-123
     *
     * @var string
     */
    public $searchKey;

    /**
     * @example vpc-123
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'dbInstanceId' => 'DbInstanceId',
        'gatewayId'    => 'GatewayId',
        'host'         => 'Host',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'port'         => 'Port',
        'regionId'     => 'RegionId',
        'searchKey'    => 'SearchKey',
        'vpcId'        => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbInstanceId) {
            $res['DbInstanceId'] = $this->dbInstanceId;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->searchKey) {
            $res['SearchKey'] = $this->searchKey;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDatabaseAccessPointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbInstanceId'])) {
            $model->dbInstanceId = $map['DbInstanceId'];
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SearchKey'])) {
            $model->searchKey = $map['SearchKey'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
