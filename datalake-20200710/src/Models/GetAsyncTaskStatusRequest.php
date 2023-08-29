<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class GetAsyncTaskStatusRequest extends Model
{
    /**
     * @example 1344371
     *
     * @var string
     */
    public $catalogId;

    /**
     * @example f546c761570e5efc8146a1986f7890d2
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'catalogId' => 'CatalogId',
        'taskId'    => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->catalogId) {
            $res['CatalogId'] = $this->catalogId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAsyncTaskStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CatalogId'])) {
            $model->catalogId = $map['CatalogId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
