<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataExportOrderRequest;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataExportOrderRequest\pluginParam\watermark;
use AlibabaCloud\Tea\Model;

class pluginParam extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $affectRows;

    /**
     * @var string
     */
    public $classify;

    /**
     * @example 18****
     *
     * @var int
     */
    public $dbId;

    /**
     * @example SELECT * FROM DMS_test
     * LIMIT 20;
     * @var string
     */
    public $exeSQL;

    /**
     * @example true
     *
     * @var bool
     */
    public $ignoreAffectRows;

    /**
     * @var string
     */
    public $ignoreAffectRowsReason;

    /**
     * @example 132****
     *
     * @var int
     */
    public $instanceId;

    /**
     * @example true
     *
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
    }

    public function toMap()
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
            $res['Watermark'] = null !== $this->watermark ? $this->watermark->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pluginParam
     */
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
