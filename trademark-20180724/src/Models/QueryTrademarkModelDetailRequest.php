<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class QueryTrademarkModelDetailRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $env;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var bool
     */
    public $reviewSupplementMaterial;
    protected $_name = [
        'bizId'                    => 'BizId',
        'env'                      => 'Env',
        'orderId'                  => 'OrderId',
        'reviewSupplementMaterial' => 'ReviewSupplementMaterial',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->reviewSupplementMaterial) {
            $res['ReviewSupplementMaterial'] = $this->reviewSupplementMaterial;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTrademarkModelDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['ReviewSupplementMaterial'])) {
            $model->reviewSupplementMaterial = $map['ReviewSupplementMaterial'];
        }

        return $model;
    }
}
