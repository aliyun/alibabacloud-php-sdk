<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListRemoteADBDataSourcesResponseBody\dataSourceItems;

class ListRemoteADBDataSourcesResponseBody extends Model
{
    /**
     * @var dataSourceItems
     */
    public $dataSourceItems;
    /**
     * @var string
     */
    public $requestId;
    /**
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
        if (null !== $this->dataSourceItems) {
            $this->dataSourceItems->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSourceItems) {
            $res['DataSourceItems'] = null !== $this->dataSourceItems ? $this->dataSourceItems->toArray($noStream) : $this->dataSourceItems;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
