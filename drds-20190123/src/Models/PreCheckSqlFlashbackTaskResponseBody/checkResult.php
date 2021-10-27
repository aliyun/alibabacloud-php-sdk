<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\PreCheckSqlFlashbackTaskResponseBody;

use AlibabaCloud\Tea\Model;

class checkResult extends Model
{
    /**
     * @var bool
     */
    public $binlogExists;

    /**
     * @var bool
     */
    public $binlogRowQueryEventEnabled;

    /**
     * @var bool
     */
    public $canUpgradeSupportBinlogRowQueryEvents;

    /**
     * @var bool
     */
    public $hasTable;

    /**
     * @var bool
     */
    public $supportBinlogRowQueryEvents;
    protected $_name = [
        'binlogExists'                          => 'BinlogExists',
        'binlogRowQueryEventEnabled'            => 'BinlogRowQueryEventEnabled',
        'canUpgradeSupportBinlogRowQueryEvents' => 'CanUpgradeSupportBinlogRowQueryEvents',
        'hasTable'                              => 'HasTable',
        'supportBinlogRowQueryEvents'           => 'SupportBinlogRowQueryEvents',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->binlogExists) {
            $res['BinlogExists'] = $this->binlogExists;
        }
        if (null !== $this->binlogRowQueryEventEnabled) {
            $res['BinlogRowQueryEventEnabled'] = $this->binlogRowQueryEventEnabled;
        }
        if (null !== $this->canUpgradeSupportBinlogRowQueryEvents) {
            $res['CanUpgradeSupportBinlogRowQueryEvents'] = $this->canUpgradeSupportBinlogRowQueryEvents;
        }
        if (null !== $this->hasTable) {
            $res['HasTable'] = $this->hasTable;
        }
        if (null !== $this->supportBinlogRowQueryEvents) {
            $res['SupportBinlogRowQueryEvents'] = $this->supportBinlogRowQueryEvents;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return checkResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BinlogExists'])) {
            $model->binlogExists = $map['BinlogExists'];
        }
        if (isset($map['BinlogRowQueryEventEnabled'])) {
            $model->binlogRowQueryEventEnabled = $map['BinlogRowQueryEventEnabled'];
        }
        if (isset($map['CanUpgradeSupportBinlogRowQueryEvents'])) {
            $model->canUpgradeSupportBinlogRowQueryEvents = $map['CanUpgradeSupportBinlogRowQueryEvents'];
        }
        if (isset($map['HasTable'])) {
            $model->hasTable = $map['HasTable'];
        }
        if (isset($map['SupportBinlogRowQueryEvents'])) {
            $model->supportBinlogRowQueryEvents = $map['SupportBinlogRowQueryEvents'];
        }

        return $model;
    }
}
