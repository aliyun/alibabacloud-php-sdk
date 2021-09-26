<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class DescribeAccountsRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $loginName;

    /**
     * @var string
     */
    public $key;

    /**
     * @var int
     */
    public $featureType;

    /**
     * @var int
     */
    public $departId;

    /**
     * @var int
     */
    public $queryType;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var int
     */
    public $operationId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $tableId;

    /**
     * @var string
     */
    public $packageId;

    /**
     * @var string
     */
    public $columnId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $currentPage;
    protected $_name = [
        'lang'        => 'Lang',
        'loginName'   => 'LoginName',
        'key'         => 'Key',
        'featureType' => 'FeatureType',
        'departId'    => 'DepartId',
        'queryType'   => 'QueryType',
        'productCode' => 'ProductCode',
        'operationId' => 'OperationId',
        'instanceId'  => 'InstanceId',
        'tableId'     => 'TableId',
        'packageId'   => 'PackageId',
        'columnId'    => 'ColumnId',
        'pageSize'    => 'PageSize',
        'currentPage' => 'CurrentPage',
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
        if (null !== $this->loginName) {
            $res['LoginName'] = $this->loginName;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->featureType) {
            $res['FeatureType'] = $this->featureType;
        }
        if (null !== $this->departId) {
            $res['DepartId'] = $this->departId;
        }
        if (null !== $this->queryType) {
            $res['QueryType'] = $this->queryType;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->operationId) {
            $res['OperationId'] = $this->operationId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->tableId) {
            $res['TableId'] = $this->tableId;
        }
        if (null !== $this->packageId) {
            $res['PackageId'] = $this->packageId;
        }
        if (null !== $this->columnId) {
            $res['ColumnId'] = $this->columnId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAccountsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['LoginName'])) {
            $model->loginName = $map['LoginName'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['FeatureType'])) {
            $model->featureType = $map['FeatureType'];
        }
        if (isset($map['DepartId'])) {
            $model->departId = $map['DepartId'];
        }
        if (isset($map['QueryType'])) {
            $model->queryType = $map['QueryType'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['OperationId'])) {
            $model->operationId = $map['OperationId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TableId'])) {
            $model->tableId = $map['TableId'];
        }
        if (isset($map['PackageId'])) {
            $model->packageId = $map['PackageId'];
        }
        if (isset($map['ColumnId'])) {
            $model->columnId = $map['ColumnId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        return $model;
    }
}
