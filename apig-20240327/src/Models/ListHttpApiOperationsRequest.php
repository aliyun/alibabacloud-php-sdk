<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class ListHttpApiOperationsRequest extends Model
{
    /**
     * @example GET
     *
     * @var string
     */
    public $method;

    /**
     * @example GetUser
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

    /**
     * @example /v1
     *
     * @var string
     */
    public $pathLike;
    protected $_name = [
        'method'     => 'method',
        'nameLike'   => 'nameLike',
        'pageNumber' => 'pageNumber',
        'pageSize'   => 'pageSize',
        'pathLike'   => 'pathLike',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->method) {
            $res['method'] = $this->method;
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
        if (null !== $this->pathLike) {
            $res['pathLike'] = $this->pathLike;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHttpApiOperationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['method'])) {
            $model->method = $map['method'];
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
        if (isset($map['pathLike'])) {
            $model->pathLike = $map['pathLike'];
        }

        return $model;
    }
}
