<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeOssDownloadsResponseBody\items;

class DescribeOssDownloadsResponseBody extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;
    /**
     * @var items
     */
    public $items;
    /**
     * @var string
     */
    public $migrateTaskId;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBInstanceId'  => 'DBInstanceId',
        'items'         => 'Items',
        'migrateTaskId' => 'MigrateTaskId',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->items) {
            $this->items->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->items) {
            $res['Items'] = null !== $this->items ? $this->items->toArray($noStream) : $this->items;
        }

        if (null !== $this->migrateTaskId) {
            $res['MigrateTaskId'] = $this->migrateTaskId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['Items'])) {
            $model->items = items::fromMap($map['Items']);
        }

        if (isset($map['MigrateTaskId'])) {
            $model->migrateTaskId = $map['MigrateTaskId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
