<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataExportOrderDetailResponseBody\dataExportOrderDetail;

use AlibabaCloud\Tea\Model;

class orderDetail extends Model
{
    /**
     * @var int
     */
    public $dbId;

    /**
     * @var string
     */
    public $database;

    /**
     * @var string
     */
    public $classify;

    /**
     * @var string
     */
    public $exeSQL;

    /**
     * @var bool
     */
    public $logic;

    /**
     * @var int
     */
    public $actualAffectRows;

    /**
     * @var bool
     */
    public $ignoreAffectRows;

    /**
     * @var string
     */
    public $ignoreAffectRowsReason;

    /**
     * @var string
     */
    public $envType;
    protected $_name = [
        'dbId'                   => 'DbId',
        'database'               => 'Database',
        'classify'               => 'Classify',
        'exeSQL'                 => 'ExeSQL',
        'logic'                  => 'Logic',
        'actualAffectRows'       => 'ActualAffectRows',
        'ignoreAffectRows'       => 'IgnoreAffectRows',
        'ignoreAffectRowsReason' => 'IgnoreAffectRowsReason',
        'envType'                => 'EnvType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->classify) {
            $res['Classify'] = $this->classify;
        }
        if (null !== $this->exeSQL) {
            $res['ExeSQL'] = $this->exeSQL;
        }
        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }
        if (null !== $this->actualAffectRows) {
            $res['ActualAffectRows'] = $this->actualAffectRows;
        }
        if (null !== $this->ignoreAffectRows) {
            $res['IgnoreAffectRows'] = $this->ignoreAffectRows;
        }
        if (null !== $this->ignoreAffectRowsReason) {
            $res['IgnoreAffectRowsReason'] = $this->ignoreAffectRowsReason;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return orderDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['Classify'])) {
            $model->classify = $map['Classify'];
        }
        if (isset($map['ExeSQL'])) {
            $model->exeSQL = $map['ExeSQL'];
        }
        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }
        if (isset($map['ActualAffectRows'])) {
            $model->actualAffectRows = $map['ActualAffectRows'];
        }
        if (isset($map['IgnoreAffectRows'])) {
            $model->ignoreAffectRows = $map['IgnoreAffectRows'];
        }
        if (isset($map['IgnoreAffectRowsReason'])) {
            $model->ignoreAffectRowsReason = $map['IgnoreAffectRowsReason'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }

        return $model;
    }
}
