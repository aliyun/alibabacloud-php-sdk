<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataExportOrderDetailResponseBody\dataExportOrderDetail;

use AlibabaCloud\Dara\Model;

class orderDetail extends Model
{
    /**
     * @var int
     */
    public $actualAffectRows;

    /**
     * @var string
     */
    public $classify;

    /**
     * @var string
     */
    public $database;

    /**
     * @var int
     */
    public $dbId;

    /**
     * @var string
     */
    public $envType;

    /**
     * @var string
     */
    public $exeSQL;

    /**
     * @var bool
     */
    public $ignoreAffectRows;

    /**
     * @var string
     */
    public $ignoreAffectRowsReason;

    /**
     * @var bool
     */
    public $logic;
    protected $_name = [
        'actualAffectRows' => 'ActualAffectRows',
        'classify' => 'Classify',
        'database' => 'Database',
        'dbId' => 'DbId',
        'envType' => 'EnvType',
        'exeSQL' => 'ExeSQL',
        'ignoreAffectRows' => 'IgnoreAffectRows',
        'ignoreAffectRowsReason' => 'IgnoreAffectRowsReason',
        'logic' => 'Logic',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actualAffectRows) {
            $res['ActualAffectRows'] = $this->actualAffectRows;
        }

        if (null !== $this->classify) {
            $res['Classify'] = $this->classify;
        }

        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }

        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }

        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }

        if (null !== $this->exeSQL) {
            $res['ExeSQL'] = $this->exeSQL;
        }

        if (null !== $this->ignoreAffectRows) {
            $res['IgnoreAffectRows'] = $this->ignoreAffectRows;
        }

        if (null !== $this->ignoreAffectRowsReason) {
            $res['IgnoreAffectRowsReason'] = $this->ignoreAffectRowsReason;
        }

        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
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
        if (isset($map['ActualAffectRows'])) {
            $model->actualAffectRows = $map['ActualAffectRows'];
        }

        if (isset($map['Classify'])) {
            $model->classify = $map['Classify'];
        }

        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }

        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }

        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }

        if (isset($map['ExeSQL'])) {
            $model->exeSQL = $map['ExeSQL'];
        }

        if (isset($map['IgnoreAffectRows'])) {
            $model->ignoreAffectRows = $map['IgnoreAffectRows'];
        }

        if (isset($map['IgnoreAffectRowsReason'])) {
            $model->ignoreAffectRowsReason = $map['IgnoreAffectRowsReason'];
        }

        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }

        return $model;
    }
}
