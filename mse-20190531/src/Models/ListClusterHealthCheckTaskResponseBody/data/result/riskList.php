<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListClusterHealthCheckTaskResponseBody\data\result;

use AlibabaCloud\Tea\Model;

class riskList extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @description ID。
     *
     * @example 3426
     *
     * @var int
     */
    public $id;

    /**
     * @example null
     *
     * @var string
     */
    public $module;

    /**
     * @example false
     *
     * @var bool
     */
    public $mute;

    /**
     * @example null
     *
     * @var bool
     */
    public $noticeFeature;

    /**
     * @example 123456
     *
     * @var string
     */
    public $primaryUser;

    /**
     * @example 22020010001
     *
     * @var string
     */
    public $riskCode;

    /**
     * @example MID
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $riskName;

    /**
     * @var string
     */
    public $riskType;

    /**
     * @var string
     */
    public $situation;

    /**
     * @var string
     */
    public $suggestion;

    /**
     * @example 1
     *
     * @var int
     */
    public $taskId;

    /**
     * @example null
     *
     * @var int
     */
    public $type;

    /**
     * @example null
     *
     * @var string
     */
    public $values;
    protected $_name = [
        'description'   => 'Description',
        'id'            => 'Id',
        'module'        => 'Module',
        'mute'          => 'Mute',
        'noticeFeature' => 'NoticeFeature',
        'primaryUser'   => 'PrimaryUser',
        'riskCode'      => 'RiskCode',
        'riskLevel'     => 'RiskLevel',
        'riskName'      => 'RiskName',
        'riskType'      => 'RiskType',
        'situation'     => 'Situation',
        'suggestion'    => 'Suggestion',
        'taskId'        => 'TaskId',
        'type'          => 'Type',
        'values'        => 'Values',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->module) {
            $res['Module'] = $this->module;
        }
        if (null !== $this->mute) {
            $res['Mute'] = $this->mute;
        }
        if (null !== $this->noticeFeature) {
            $res['NoticeFeature'] = $this->noticeFeature;
        }
        if (null !== $this->primaryUser) {
            $res['PrimaryUser'] = $this->primaryUser;
        }
        if (null !== $this->riskCode) {
            $res['RiskCode'] = $this->riskCode;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->riskName) {
            $res['RiskName'] = $this->riskName;
        }
        if (null !== $this->riskType) {
            $res['RiskType'] = $this->riskType;
        }
        if (null !== $this->situation) {
            $res['Situation'] = $this->situation;
        }
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->values) {
            $res['Values'] = $this->values;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return riskList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Module'])) {
            $model->module = $map['Module'];
        }
        if (isset($map['Mute'])) {
            $model->mute = $map['Mute'];
        }
        if (isset($map['NoticeFeature'])) {
            $model->noticeFeature = $map['NoticeFeature'];
        }
        if (isset($map['PrimaryUser'])) {
            $model->primaryUser = $map['PrimaryUser'];
        }
        if (isset($map['RiskCode'])) {
            $model->riskCode = $map['RiskCode'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['RiskName'])) {
            $model->riskName = $map['RiskName'];
        }
        if (isset($map['RiskType'])) {
            $model->riskType = $map['RiskType'];
        }
        if (isset($map['Situation'])) {
            $model->situation = $map['Situation'];
        }
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Values'])) {
            $model->values = $map['Values'];
        }

        return $model;
    }
}
