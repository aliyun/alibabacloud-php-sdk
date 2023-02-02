<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListClusterHealthCheckTaskResponseBody\data\result;

use AlibabaCloud\Tea\Model;

class riskList extends Model
{
    /**
     * @description The description.
     *
     * @example {\\"desc\\":\\"The engine version is outdated and a large number of features are not supported. Upgrade the engine to the latest version at the earliest opportunity. \\"}
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID.
     *
     * @example 3426
     *
     * @var int
     */
    public $id;

    /**
     * @description A redundant parameter.
     *
     * @example null
     *
     * @var string
     */
    public $module;

    /**
     * @description Indicates whether the risk item notification feature is disabled.
     *
     *   true: disabled
     *   false: enabled
     *
     * @example false
     *
     * @var bool
     */
    public $mute;

    /**
     * @description A redundant parameter.
     *
     * @example null
     *
     * @var bool
     */
    public $noticeFeature;

    /**
     * @description The ID of the user to which the instance belongs.
     *
     * @example 123456
     *
     * @var string
     */
    public $primaryUser;

    /**
     * @description The risk code.
     *
     * @example 22020010001
     *
     * @var string
     */
    public $riskCode;

    /**
     * @description The severity of the risk. Valid values:
     *
     *   HIGH: high risk
     *   MID: medium risk
     *   LOW: low risk
     *
     * @example MID
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @description The name of the risk.
     *
     * @example The engine version is outdated.
     *
     * @var string
     */
    public $riskName;

    /**
     * @description The type of the risk.
     *
     * @example Version risk
     *
     * @var string
     */
    public $riskType;

    /**
     * @description The situation.
     *
     * @example {\\"desc\\":\\"The engine version is outdated and a large number of features are not supported.\\",\\"links\\":\[{\\"type\\":\\"url\\",\\"value\\":\\"https://xxxx"\\",\\"desc\\":\\"Release notes\\"}]}
     *
     * @var string
     */
    public $situation;

    /**
     * @description The suggestion.
     *
     * @example {"desc": "Upgrade to the latest version at the earliest opportunity.", "links":\[{"type": "upgrade", "desc": "Click to upgrade"}]}
     *
     * @var string
     */
    public $suggestion;

    /**
     * @description The ID of the associated parent task.
     *
     * @example 1
     *
     * @var int
     */
    public $taskId;

    /**
     * @description A redundant parameter.
     *
     * @example null
     *
     * @var int
     */
    public $type;

    /**
     * @description A redundant parameter.
     *
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
