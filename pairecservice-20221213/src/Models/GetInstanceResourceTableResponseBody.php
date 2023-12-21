<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetInstanceResourceTableResponseBody\fields;
use AlibabaCloud\Tea\Model;

class GetInstanceResourceTableResponseBody extends Model
{
    /**
     * @var fields[]
     */
    public $fields;

    /**
     * @example 74D958EF-3598-56FA-8296-FF1575CE43DF
     *
     * @var string
     */
    public $requestId;

    /**
     * @example test_table
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'fields'    => 'Fields',
        'requestId' => 'RequestId',
        'tableName' => 'TableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fields) {
            $res['Fields'] = [];
            if (null !== $this->fields && \is_array($this->fields)) {
                $n = 0;
                foreach ($this->fields as $item) {
                    $res['Fields'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstanceResourceTableResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Fields'])) {
            if (!empty($map['Fields'])) {
                $model->fields = [];
                $n             = 0;
                foreach ($map['Fields'] as $item) {
                    $model->fields[$n++] = null !== $item ? fields::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
