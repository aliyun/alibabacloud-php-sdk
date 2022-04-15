<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\Tea\Model;

class PageQueryResourcePackageListRequest extends Model
{
    /**
     * @description 请求操作人Id
     *
     * @var string
     */
    public $operatorId;

    /**
     * @description 请求操作人类型
     *
     * @var string
     */
    public $operatorType;

    /**
     * @description 资源包类型,PackageType[CU(cu),code,cssResourceType,desc]
     *
     * @var string
     */
    public $packageType;

    /**
     * @description 当前页码，默认1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 每页项数，默认20,最大100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 查询过期的资源包类型,ResourcePackageValidQueryConditionType[All(查询所有资源包),CurrentlyValid(查询当前有效的资源包(已开始，未结束)),PendingValid(未开始,即将生效的资源包),AllValid(已开始未结束 + 即将开始 的资源包),PendingInvalid5m(5min内即将到期的资源包),HasInvalid(已经过期的资源包),queryType,desc]
     *
     * @var string
     */
    public $queryValidType;
    protected $_name = [
        'operatorId'     => 'OperatorId',
        'operatorType'   => 'OperatorType',
        'packageType'    => 'PackageType',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'queryValidType' => 'QueryValidType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operatorId) {
            $res['OperatorId'] = $this->operatorId;
        }
        if (null !== $this->operatorType) {
            $res['OperatorType'] = $this->operatorType;
        }
        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->queryValidType) {
            $res['QueryValidType'] = $this->queryValidType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PageQueryResourcePackageListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperatorId'])) {
            $model->operatorId = $map['OperatorId'];
        }
        if (isset($map['OperatorType'])) {
            $model->operatorType = $map['OperatorType'];
        }
        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['QueryValidType'])) {
            $model->queryValidType = $map['QueryValidType'];
        }

        return $model;
    }
}
