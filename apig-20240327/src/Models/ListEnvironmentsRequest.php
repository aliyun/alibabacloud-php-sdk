<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class ListEnvironmentsRequest extends Model
{
    /**
     * @var string
     */
    public $aliasLike;

    /**
     * @example gw-cptv6ktlhtgnqr73h8d1
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @example test-gw
     *
     * @var string
     */
    public $gatewayNameLike;

    /**
     * @example test
     *
     * @var string
     */
    public $nameLike;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'aliasLike'       => 'aliasLike',
        'gatewayId'       => 'gatewayId',
        'gatewayNameLike' => 'gatewayNameLike',
        'nameLike'        => 'nameLike',
        'pageNumber'      => 'pageNumber',
        'pageSize'        => 'pageSize',
    ];

    public function validate()
    {
    }

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

        return $model;
    }
}
