<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class CreateRestorePlanRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example ld-bp150tns0sjxs****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description This parameter is required.
     *
     * @example false
     *
     * @var bool
     */
    public $restoreAllTable;

    /**
     * @description This parameter is required.
     *
     * @example true
     *
     * @var bool
     */
    public $restoreByCopy;

    /**
     * @description This parameter is required.
     *
     * @example 2020-11-05T05:49:42Z
     *
     * @var string
     */
    public $restoreToDate;

    /**
     * @example test_ns:test_table/test_ns:test_table2
     *
     * @var string
     */
    public $tables;

    /**
     * @description This parameter is required.
     *
     * @example ld-bp169l540vc6c****
     *
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
