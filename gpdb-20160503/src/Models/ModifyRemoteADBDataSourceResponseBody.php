<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\ModifyRemoteADBDataSourceResponseBody\dataSourceItem;

class ModifyRemoteADBDataSourceResponseBody extends Model
{
    /**
     * @var dataSourceItem
     */
    public $dataSourceItem;
    /**
     * @var string
     */
    public $requestId;
    /**
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
        if (null !== $this->dataSourceItem) {
            $this->dataSourceItem->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSourceItem) {
            $res['DataSourceItem'] = null !== $this->dataSourceItem ? $this->dataSourceItem->toArray($noStream) : $this->dataSourceItem;
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
