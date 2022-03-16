<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class CreateRestorePlanRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var bool
     */
    public $restoreAllTable;

    /**
     * @var bool
     */
    public $restoreByCopy;

    /**
     * @var string
     */
    public $restoreToDate;

    /**
     * @var string
     */
    public $tables;

    /**
     * @var string
     */
    public $targetClusterId;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'restoreAllTable' => 'RestoreAllTable',
        'restoreByCopy'   => 'RestoreByCopy',
        'restoreToDate'   => 'RestoreToDate',
        'tables'          => 'Tables',
        'targetClusterId' => 'TargetClusterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->restoreAllTable) {
            $res['RestoreAllTable'] = $this->restoreAllTable;
        }
        if (null !== $this->restoreByCopy) {
            $res['RestoreByCopy'] = $this->restoreByCopy;
        }
        if (null !== $this->restoreToDate) {
            $res['RestoreToDate'] = $this->restoreToDate;
        }
        if (null !== $this->tables) {
            $res['Tables'] = $this->tables;
        }
        if (null !== $this->targetClusterId) {
            $res['TargetClusterId'] = $this->targetClusterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRestorePlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['RestoreAllTable'])) {
            $model->restoreAllTable = $map['RestoreAllTable'];
        }
        if (isset($map['RestoreByCopy'])) {
            $model->restoreByCopy = $map['RestoreByCopy'];
        }
        if (isset($map['RestoreToDate'])) {
            $model->restoreToDate = $map['RestoreToDate'];
        }
        if (isset($map['Tables'])) {
            $model->tables = $map['Tables'];
        }
        if (isset($map['TargetClusterId'])) {
            $model->targetClusterId = $map['TargetClusterId'];
        }

        return $model;
    }
}
