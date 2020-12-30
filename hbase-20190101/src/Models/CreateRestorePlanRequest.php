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
     * @var string
     */
    public $targetClusterId;

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
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'targetClusterId' => 'TargetClusterId',
        'restoreAllTable' => 'RestoreAllTable',
        'restoreByCopy'   => 'RestoreByCopy',
        'restoreToDate'   => 'RestoreToDate',
        'tables'          => 'Tables',
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
        if (null !== $this->targetClusterId) {
            $res['TargetClusterId'] = $this->targetClusterId;
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
        if (isset($map['TargetClusterId'])) {
            $model->targetClusterId = $map['TargetClusterId'];
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

        return $model;
    }
}
