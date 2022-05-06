<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeModifyPGHbaConfigLogResponseBody\hbaLogItems;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeModifyPGHbaConfigLogResponseBody\hbaLogItems\hbaLogItem\afterHbaItems;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeModifyPGHbaConfigLogResponseBody\hbaLogItems\hbaLogItem\beforeHbaItems;
use AlibabaCloud\Tea\Model;

class hbaLogItem extends Model
{
    /**
     * @var afterHbaItems
     */
    public $afterHbaItems;

    /**
     * @var beforeHbaItems
     */
    public $beforeHbaItems;

    /**
     * @var string
     */
    public $modifyStatus;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $statusReason;
    protected $_name = [
        'afterHbaItems'  => 'AfterHbaItems',
        'beforeHbaItems' => 'BeforeHbaItems',
        'modifyStatus'   => 'ModifyStatus',
        'modifyTime'     => 'ModifyTime',
        'statusReason'   => 'StatusReason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->afterHbaItems) {
            $res['AfterHbaItems'] = null !== $this->afterHbaItems ? $this->afterHbaItems->toMap() : null;
        }
        if (null !== $this->beforeHbaItems) {
            $res['BeforeHbaItems'] = null !== $this->beforeHbaItems ? $this->beforeHbaItems->toMap() : null;
        }
        if (null !== $this->modifyStatus) {
            $res['ModifyStatus'] = $this->modifyStatus;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->statusReason) {
            $res['StatusReason'] = $this->statusReason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hbaLogItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AfterHbaItems'])) {
            $model->afterHbaItems = afterHbaItems::fromMap($map['AfterHbaItems']);
        }
        if (isset($map['BeforeHbaItems'])) {
            $model->beforeHbaItems = beforeHbaItems::fromMap($map['BeforeHbaItems']);
        }
        if (isset($map['ModifyStatus'])) {
            $model->modifyStatus = $map['ModifyStatus'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['StatusReason'])) {
            $model->statusReason = $map['StatusReason'];
        }

        return $model;
    }
}
