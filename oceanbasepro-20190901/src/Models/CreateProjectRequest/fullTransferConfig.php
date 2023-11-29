<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectRequest;

use AlibabaCloud\Tea\Model;

class fullTransferConfig extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $allowDestTableNotEmpty;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $fullTransferSpeedMode;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $fullVerifySpeedMode;

    /**
     * @example true
     *
     * @var bool
     */
    public $nonePkUkTruncateDstTable;
    protected $_name = [
        'allowDestTableNotEmpty'   => 'AllowDestTableNotEmpty',
        'fullTransferSpeedMode'    => 'FullTransferSpeedMode',
        'fullVerifySpeedMode'      => 'FullVerifySpeedMode',
        'nonePkUkTruncateDstTable' => 'NonePkUkTruncateDstTable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowDestTableNotEmpty) {
            $res['AllowDestTableNotEmpty'] = $this->allowDestTableNotEmpty;
        }
        if (null !== $this->fullTransferSpeedMode) {
            $res['FullTransferSpeedMode'] = $this->fullTransferSpeedMode;
        }
        if (null !== $this->fullVerifySpeedMode) {
            $res['FullVerifySpeedMode'] = $this->fullVerifySpeedMode;
        }
        if (null !== $this->nonePkUkTruncateDstTable) {
            $res['NonePkUkTruncateDstTable'] = $this->nonePkUkTruncateDstTable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fullTransferConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowDestTableNotEmpty'])) {
            $model->allowDestTableNotEmpty = $map['AllowDestTableNotEmpty'];
        }
        if (isset($map['FullTransferSpeedMode'])) {
            $model->fullTransferSpeedMode = $map['FullTransferSpeedMode'];
        }
        if (isset($map['FullVerifySpeedMode'])) {
            $model->fullVerifySpeedMode = $map['FullVerifySpeedMode'];
        }
        if (isset($map['NonePkUkTruncateDstTable'])) {
            $model->nonePkUkTruncateDstTable = $map['NonePkUkTruncateDstTable'];
        }

        return $model;
    }
}
