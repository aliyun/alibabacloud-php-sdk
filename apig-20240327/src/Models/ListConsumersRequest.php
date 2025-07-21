<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class ListConsumersRequest extends Model
{
    /**
     * @example AI
     *
     * @var string
     */
    public $gatewayType;

    /**
     * @example UI-test
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
        'gatewayType' => 'gatewayType',
        'nameLike' => 'nameLike',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayType) {
            $res['gatewayType'] = $this->gatewayType;
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
     * @return ListConsumersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['gatewayType'])) {
            $model->gatewayType = $map['gatewayType'];
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
