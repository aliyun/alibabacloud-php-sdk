<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListRemoteADBDataSourcesResponseBody\dataSourceItems;
use AlibabaCloud\Tea\Model;

class ListRemoteADBDataSourcesResponseBody extends Model
{
    /**
     * @description Returns the successfully added data sharing service data.
     *
     * @var dataSourceItems
     */
    public $dataSourceItems;

    /**
     * @description Request ID.
     *
     * @example e9d60eb1-e90d-4bc6-a470-c8b767460858
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Task ID.
     *
     * @example 90000
     *
     * @var int
     */
    public $taskId;
    protected $_name = [
        'dataSourceItems' => 'DataSourceItems',
        'requestId'       => 'RequestId',
        'taskId'          => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceItems) {
            $res['DataSourceItems'] = null !== $this->dataSourceItems ? $this->dataSourceItems->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRemoteADBDataSourcesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceItems'])) {
            $model->dataSourceItems = dataSourceItems::fromMap($map['DataSourceItems']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
