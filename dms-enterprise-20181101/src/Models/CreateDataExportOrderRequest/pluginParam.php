<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataExportOrderRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataExportOrderRequest\pluginParam\watermark;

class pluginParam extends Model
{
    /**
     * @var int
     */
    public $affectRows;
    /**
     * @var string
     */
    public $classify;
    /**
     * @var int
     */
    public $dbId;
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
     * @var int
     */
    public $instanceId;
    /**
     * @var bool
     */
    public $logic;
    /**
     * @var watermark
     */
    public $watermark;
    protected $_name = [
        'affectRows'             => 'AffectRows',
        'classify'               => 'Classify',
        'dbId'                   => 'DbId',
        'exeSQL'                 => 'ExeSQL',
        'ignoreAffectRows'       => 'IgnoreAffectRows',
        'ignoreAffectRowsReason' => 'IgnoreAffectRowsReason',
        'instanceId'             => 'InstanceId',
        'logic'                  => 'Logic',
        'watermark'              => 'Watermark',
    ];

    public function validate()
    {
        if (null !== $this->watermark) {
            $this->watermark->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->affectRows) {
            $res['AffectRows'] = $this->affectRows;
        }

        if (null !== $this->classify) {
            $res['Classify'] = $this->classify;
        }

        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
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

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }

        if (null !== $this->watermark) {
            $res['Watermark'] = null !== $this->watermark ? $this->watermark->toArray($noStream) : $this->watermark;
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
        if (isset($map['AffectRows'])) {
            $model->affectRows = $map['AffectRows'];
        }

        if (isset($map['Classify'])) {
            $model->classify = $map['Classify'];
        }

        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
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

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }

        if (isset($map['Watermark'])) {
            $model->watermark = watermark::fromMap($map['Watermark']);
        }

        return $model;
    }
}
