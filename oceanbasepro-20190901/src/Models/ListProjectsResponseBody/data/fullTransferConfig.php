<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectsResponseBody\data;

use AlibabaCloud\Dara\Model;

class fullTransferConfig extends Model
{
    /**
     * @var bool
     */
    public $allowDestTableNotEmpty;

    /**
     * @var string
     */
    public $fullTransferSpeedMode;

    /**
     * @var string
     */
    public $fullVerifySpeedMode;

    /**
     * @var bool
     */
    public $nonePkUkTruncateDstTable;
    protected $_name = [
        'allowDestTableNotEmpty' => 'AllowDestTableNotEmpty',
        'fullTransferSpeedMode' => 'FullTransferSpeedMode',
        'fullVerifySpeedMode' => 'FullVerifySpeedMode',
        'nonePkUkTruncateDstTable' => 'NonePkUkTruncateDstTable',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
