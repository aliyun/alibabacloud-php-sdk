<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class ListEnvironmentsRequest extends Model
{
    /**
     * @description Environment alias, fuzzy search.
     *
     * @example 测试
     *
     * @var string
     */
    public $aliasLike;

    /**
     * @description Gateway ID, exact search.
     *
     * @example gw-cptv6ktlhtgnqr73h8d1
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @description Gateway name, fuzzy search.
     *
     * @example test-gw
     *
     * @var string
     */
    public $gatewayNameLike;

    /**
     * @description Environment name, fuzzy search.
     *
     * @example test
     *
     * @var string
     */
    public $nameLike;

    /**
     * @description Page number, default is 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description Page size, default is 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Resource group ID.
     *
     * @example rg-aek2sy66mftleiq
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'aliasLike' => 'aliasLike',
        'gatewayId' => 'gatewayId',
        'gatewayNameLike' => 'gatewayNameLike',
        'nameLike' => 'nameLike',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'resourceGroupId' => 'resourceGroupId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliasLike) {
            $res['aliasLike'] = $this->aliasLike;
        }
        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }
        if (null !== $this->gatewayNameLike) {
            $res['gatewayNameLike'] = $this->gatewayNameLike;
        }
        if (null !== $this->nameLike) {
            $res['nameLike'] = $this->nameLike;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEnvironmentsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['aliasLike'])) {
            $model->aliasLike = $map['aliasLike'];
        }
        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }
        if (isset($map['gatewayNameLike'])) {
            $model->gatewayNameLike = $map['gatewayNameLike'];
        }
        if (isset($map['nameLike'])) {
            $model->nameLike = $map['nameLike'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }

        return $model;
    }
}
