<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\CreateRemoteADBDataSourceResponseBody\dataSourceItem;
use AlibabaCloud\Tea\Model;

class CreateRemoteADBDataSourceResponseBody extends Model
{
    /**
     * @description Returns the successfully added data sharing service data.
     *
     * @var dataSourceItem
     */
    public $dataSourceItem;

    /**
     * @description Request ID.
     *
     * @example e9d60eb1-e90d-4bc6-a470-c8b767460858
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Workflow task ID.
     *
     * @example 90000
     *
     * @var int
     */
    public $taskId;
    protected $_name = [
        'dataSourceItem' => 'DataSourceItem',
        'requestId'      => 'RequestId',
        'taskId'         => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceItem) {
            $res['DataSourceItem'] = null !== $this->dataSourceItem ? $this->dataSourceItem->toMap() : null;
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
     * @return CreateRemoteADBDataSourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceItem'])) {
            $model->dataSourceItem = dataSourceItem::fromMap($map['DataSourceItem']);
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
