<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20190902\Models;

use AlibabaCloud\Tea\Model;

class QueryDetailItemRequest extends Model
{
    /**
     * @var string
     */
    public $detailConvertType;

    /**
     * @var string
     */
    public $detailId;

    /**
     * @var string
     */
    public $detailType;

    /**
     * @var bool
     */
    public $mock;
    protected $_name = [
        'detailConvertType' => 'DetailConvertType',
        'detailId'          => 'DetailId',
        'detailType'        => 'DetailType',
        'mock'              => 'Mock',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detailConvertType) {
            $res['DetailConvertType'] = $this->detailConvertType;
        }
        if (null !== $this->detailId) {
            $res['DetailId'] = $this->detailId;
        }
        if (null !== $this->detailType) {
            $res['DetailType'] = $this->detailType;
        }
        if (null !== $this->mock) {
            $res['Mock'] = $this->mock;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDetailItemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DetailConvertType'])) {
            $model->detailConvertType = $map['DetailConvertType'];
        }
        if (isset($map['DetailId'])) {
            $model->detailId = $map['DetailId'];
        }
        if (isset($map['DetailType'])) {
            $model->detailType = $map['DetailType'];
        }
        if (isset($map['Mock'])) {
            $model->mock = $map['Mock'];
        }

        return $model;
    }
}
