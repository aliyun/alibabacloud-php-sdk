<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class MyCatCustomImportPreCheckShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $dstDbNme;

    /**
     * @var string
     */
    public $dstDrdsInstanceId;

    /**
     * @var int
     */
    public $dstPort;

    /**
     * @var string
     */
    public $dstPwd;

    /**
     * @var string
     */
    public $dstUser;

    /**
     * @var string
     */
    public $importDb;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $ruleUrl;

    /**
     * @var string
     */
    public $schemaUrl;

    /**
     * @var string
     */
    public $tableMapShrink;

    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'dstDbNme'          => 'DstDbNme',
        'dstDrdsInstanceId' => 'DstDrdsInstanceId',
        'dstPort'           => 'DstPort',
        'dstPwd'            => 'DstPwd',
        'dstUser'           => 'DstUser',
        'importDb'          => 'ImportDb',
        'regionId'          => 'RegionId',
        'ruleUrl'           => 'RuleUrl',
        'schemaUrl'         => 'SchemaUrl',
        'tableMapShrink'    => 'TableMap',
        'taskName'          => 'TaskName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dstDbNme) {
            $res['DstDbNme'] = $this->dstDbNme;
        }
        if (null !== $this->dstDrdsInstanceId) {
            $res['DstDrdsInstanceId'] = $this->dstDrdsInstanceId;
        }
        if (null !== $this->dstPort) {
            $res['DstPort'] = $this->dstPort;
        }
        if (null !== $this->dstPwd) {
            $res['DstPwd'] = $this->dstPwd;
        }
        if (null !== $this->dstUser) {
            $res['DstUser'] = $this->dstUser;
        }
        if (null !== $this->importDb) {
            $res['ImportDb'] = $this->importDb;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ruleUrl) {
            $res['RuleUrl'] = $this->ruleUrl;
        }
        if (null !== $this->schemaUrl) {
            $res['SchemaUrl'] = $this->schemaUrl;
        }
        if (null !== $this->tableMapShrink) {
            $res['TableMap'] = $this->tableMapShrink;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MyCatCustomImportPreCheckShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DstDbNme'])) {
            $model->dstDbNme = $map['DstDbNme'];
        }
        if (isset($map['DstDrdsInstanceId'])) {
            $model->dstDrdsInstanceId = $map['DstDrdsInstanceId'];
        }
        if (isset($map['DstPort'])) {
            $model->dstPort = $map['DstPort'];
        }
        if (isset($map['DstPwd'])) {
            $model->dstPwd = $map['DstPwd'];
        }
        if (isset($map['DstUser'])) {
            $model->dstUser = $map['DstUser'];
        }
        if (isset($map['ImportDb'])) {
            $model->importDb = $map['ImportDb'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RuleUrl'])) {
            $model->ruleUrl = $map['RuleUrl'];
        }
        if (isset($map['SchemaUrl'])) {
            $model->schemaUrl = $map['SchemaUrl'];
        }
        if (isset($map['TableMap'])) {
            $model->tableMapShrink = $map['TableMap'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }

        return $model;
    }
}
