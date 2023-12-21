<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class CreateTableMetaResponseBody extends Model
{
    /**
     * @example 728C5E01-ABF6-5AA8-B9FC-B3BA05DECC77
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2
     *
     * @var string
     */
    public $tableMetaId;
    protected $_name = [
        'requestId'   => 'RequestId',
        'tableMetaId' => 'TableMetaId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->tableMetaId) {
            $res['TableMetaId'] = $this->tableMetaId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTableMetaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TableMetaId'])) {
            $model->tableMetaId = $map['TableMetaId'];
        }

        return $model;
    }
}
