<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetTableLineagesResponseBody;

use AlibabaCloud\Dara\Model;

class tableLineageList extends Model
{
    /**
     * @var int
     */
    public $inputBizUnitId;

    /**
     * @var int
     */
    public $inputDataSourceId;

    /**
     * @var string
     */
    public $inputDataSourceType;

    /**
     * @var int
     */
    public $inputProjectId;

    /**
     * @var bool
     */
    public $inputTableDeleted;

    /**
     * @var string
     */
    public $inputTableEnv;

    /**
     * @var string
     */
    public $inputTableGuid;

    /**
     * @var string
     */
    public $inputTableName;

    /**
     * @var string
     */
    public $nodeEnv;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var int
     */
    public $outputBizUnitId;

    /**
     * @var int
     */
    public $outputDataSourceId;

    /**
     * @var string
     */
    public $outputDataSourceType;

    /**
     * @var int
     */
    public $outputProjectId;

    /**
     * @var bool
     */
    public $outputTableDeleted;

    /**
     * @var string
     */
    public $outputTableEnv;

    /**
     * @var string
     */
    public $outputTableGuid;

    /**
     * @var string
     */
    public $outputTableName;
    protected $_name = [
        'inputBizUnitId' => 'InputBizUnitId',
        'inputDataSourceId' => 'InputDataSourceId',
        'inputDataSourceType' => 'InputDataSourceType',
        'inputProjectId' => 'InputProjectId',
        'inputTableDeleted' => 'InputTableDeleted',
        'inputTableEnv' => 'InputTableEnv',
        'inputTableGuid' => 'InputTableGuid',
        'inputTableName' => 'InputTableName',
        'nodeEnv' => 'NodeEnv',
        'nodeId' => 'NodeId',
        'outputBizUnitId' => 'OutputBizUnitId',
        'outputDataSourceId' => 'OutputDataSourceId',
        'outputDataSourceType' => 'OutputDataSourceType',
        'outputProjectId' => 'OutputProjectId',
        'outputTableDeleted' => 'OutputTableDeleted',
        'outputTableEnv' => 'OutputTableEnv',
        'outputTableGuid' => 'OutputTableGuid',
        'outputTableName' => 'OutputTableName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inputBizUnitId) {
            $res['InputBizUnitId'] = $this->inputBizUnitId;
        }

        if (null !== $this->inputDataSourceId) {
            $res['InputDataSourceId'] = $this->inputDataSourceId;
        }

        if (null !== $this->inputDataSourceType) {
            $res['InputDataSourceType'] = $this->inputDataSourceType;
        }

        if (null !== $this->inputProjectId) {
            $res['InputProjectId'] = $this->inputProjectId;
        }

        if (null !== $this->inputTableDeleted) {
            $res['InputTableDeleted'] = $this->inputTableDeleted;
        }

        if (null !== $this->inputTableEnv) {
            $res['InputTableEnv'] = $this->inputTableEnv;
        }

        if (null !== $this->inputTableGuid) {
            $res['InputTableGuid'] = $this->inputTableGuid;
        }

        if (null !== $this->inputTableName) {
            $res['InputTableName'] = $this->inputTableName;
        }

        if (null !== $this->nodeEnv) {
            $res['NodeEnv'] = $this->nodeEnv;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->outputBizUnitId) {
            $res['OutputBizUnitId'] = $this->outputBizUnitId;
        }

        if (null !== $this->outputDataSourceId) {
            $res['OutputDataSourceId'] = $this->outputDataSourceId;
        }

        if (null !== $this->outputDataSourceType) {
            $res['OutputDataSourceType'] = $this->outputDataSourceType;
        }

        if (null !== $this->outputProjectId) {
            $res['OutputProjectId'] = $this->outputProjectId;
        }

        if (null !== $this->outputTableDeleted) {
            $res['OutputTableDeleted'] = $this->outputTableDeleted;
        }

        if (null !== $this->outputTableEnv) {
            $res['OutputTableEnv'] = $this->outputTableEnv;
        }

        if (null !== $this->outputTableGuid) {
            $res['OutputTableGuid'] = $this->outputTableGuid;
        }

        if (null !== $this->outputTableName) {
            $res['OutputTableName'] = $this->outputTableName;
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
        if (isset($map['InputBizUnitId'])) {
            $model->inputBizUnitId = $map['InputBizUnitId'];
        }

        if (isset($map['InputDataSourceId'])) {
            $model->inputDataSourceId = $map['InputDataSourceId'];
        }

        if (isset($map['InputDataSourceType'])) {
            $model->inputDataSourceType = $map['InputDataSourceType'];
        }

        if (isset($map['InputProjectId'])) {
            $model->inputProjectId = $map['InputProjectId'];
        }

        if (isset($map['InputTableDeleted'])) {
            $model->inputTableDeleted = $map['InputTableDeleted'];
        }

        if (isset($map['InputTableEnv'])) {
            $model->inputTableEnv = $map['InputTableEnv'];
        }

        if (isset($map['InputTableGuid'])) {
            $model->inputTableGuid = $map['InputTableGuid'];
        }

        if (isset($map['InputTableName'])) {
            $model->inputTableName = $map['InputTableName'];
        }

        if (isset($map['NodeEnv'])) {
            $model->nodeEnv = $map['NodeEnv'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['OutputBizUnitId'])) {
            $model->outputBizUnitId = $map['OutputBizUnitId'];
        }

        if (isset($map['OutputDataSourceId'])) {
            $model->outputDataSourceId = $map['OutputDataSourceId'];
        }

        if (isset($map['OutputDataSourceType'])) {
            $model->outputDataSourceType = $map['OutputDataSourceType'];
        }

        if (isset($map['OutputProjectId'])) {
            $model->outputProjectId = $map['OutputProjectId'];
        }

        if (isset($map['OutputTableDeleted'])) {
            $model->outputTableDeleted = $map['OutputTableDeleted'];
        }

        if (isset($map['OutputTableEnv'])) {
            $model->outputTableEnv = $map['OutputTableEnv'];
        }

        if (isset($map['OutputTableGuid'])) {
            $model->outputTableGuid = $map['OutputTableGuid'];
        }

        if (isset($map['OutputTableName'])) {
            $model->outputTableName = $map['OutputTableName'];
        }

        return $model;
    }
}
