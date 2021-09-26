<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstanceSourcesRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $serviceRegionId;

    /**
     * @var string
     */
    public $engineType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var int
     */
    public $productId;

    /**
     * @var bool
     */
    public $authed;
    protected $_name = [
        'lang'            => 'Lang',
        'pageSize'        => 'PageSize',
        'currentPage'     => 'CurrentPage',
        'serviceRegionId' => 'ServiceRegionId',
        'engineType'      => 'EngineType',
        'instanceId'      => 'InstanceId',
        'dbName'          => 'DbName',
        'productId'       => 'ProductId',
        'authed'          => 'Authed',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->serviceRegionId) {
            $res['ServiceRegionId'] = $this->serviceRegionId;
        }
        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->authed) {
            $res['Authed'] = $this->authed;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceSourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['ServiceRegionId'])) {
            $model->serviceRegionId = $map['ServiceRegionId'];
        }
        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['Authed'])) {
            $model->authed = $map['Authed'];
        }

        return $model;
    }
}
