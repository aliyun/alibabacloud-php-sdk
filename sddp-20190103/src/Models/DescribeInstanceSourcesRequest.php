<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstanceSourcesRequest extends Model
{
    /**
     * @var int
     */
    public $auditStatus;

    /**
     * @var int
     */
    public $authStatus;

    /**
     * @var int
     */
    public $currentPage;

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
    public $lang;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var int
     */
    public $productId;

    /**
     * @var string
     */
    public $searchKey;

    /**
     * @var string
     */
    public $searchType;

    /**
     * @var string
     */
    public $serviceRegionId;
    protected $_name = [
        'auditStatus'     => 'AuditStatus',
        'authStatus'      => 'AuthStatus',
        'currentPage'     => 'CurrentPage',
        'engineType'      => 'EngineType',
        'instanceId'      => 'InstanceId',
        'lang'            => 'Lang',
        'pageSize'        => 'PageSize',
        'productCode'     => 'ProductCode',
        'productId'       => 'ProductId',
        'searchKey'       => 'SearchKey',
        'searchType'      => 'SearchType',
        'serviceRegionId' => 'ServiceRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditStatus) {
            $res['AuditStatus'] = $this->auditStatus;
        }
        if (null !== $this->authStatus) {
            $res['AuthStatus'] = $this->authStatus;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->searchKey) {
            $res['SearchKey'] = $this->searchKey;
        }
        if (null !== $this->searchType) {
            $res['SearchType'] = $this->searchType;
        }
        if (null !== $this->serviceRegionId) {
            $res['ServiceRegionId'] = $this->serviceRegionId;
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
        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
        }
        if (isset($map['AuthStatus'])) {
            $model->authStatus = $map['AuthStatus'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['SearchKey'])) {
            $model->searchKey = $map['SearchKey'];
        }
        if (isset($map['SearchType'])) {
            $model->searchType = $map['SearchType'];
        }
        if (isset($map['ServiceRegionId'])) {
            $model->serviceRegionId = $map['ServiceRegionId'];
        }

        return $model;
    }
}
