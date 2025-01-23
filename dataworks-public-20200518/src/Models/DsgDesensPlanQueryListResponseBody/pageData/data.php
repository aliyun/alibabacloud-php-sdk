<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DsgDesensPlanQueryListResponseBody\pageData;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DsgDesensPlanQueryListResponseBody\pageData\data\desensPlan;

class data extends Model
{
    /**
     * @var bool
     */
    public $checkWatermark;
    /**
     * @var string
     */
    public $dataType;
    /**
     * @var string
     */
    public $desenMode;
    /**
     * @var desensPlan
     */
    public $desensPlan;
    /**
     * @var string
     */
    public $desensRule;
    /**
     * @var string
     */
    public $desensWay;
    /**
     * @var string
     */
    public $gmtCreate;
    /**
     * @var string
     */
    public $gmtModified;
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $owner;
    /**
     * @var string
     */
    public $ruleName;
    /**
     * @var string
     */
    public $sceneCode;
    /**
     * @var string
     */
    public $sceneName;
    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'checkWatermark' => 'CheckWatermark',
        'dataType'       => 'DataType',
        'desenMode'      => 'DesenMode',
        'desensPlan'     => 'DesensPlan',
        'desensRule'     => 'DesensRule',
        'desensWay'      => 'DesensWay',
        'gmtCreate'      => 'GmtCreate',
        'gmtModified'    => 'GmtModified',
        'id'             => 'Id',
        'owner'          => 'Owner',
        'ruleName'       => 'RuleName',
        'sceneCode'      => 'SceneCode',
        'sceneName'      => 'SceneName',
        'status'         => 'Status',
    ];

    public function validate()
    {
        if (null !== $this->desensPlan) {
            $this->desensPlan->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkWatermark) {
            $res['CheckWatermark'] = $this->checkWatermark;
        }

        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }

        if (null !== $this->desenMode) {
            $res['DesenMode'] = $this->desenMode;
        }

        if (null !== $this->desensPlan) {
            $res['DesensPlan'] = null !== $this->desensPlan ? $this->desensPlan->toArray($noStream) : $this->desensPlan;
        }

        if (null !== $this->desensRule) {
            $res['DesensRule'] = $this->desensRule;
        }

        if (null !== $this->desensWay) {
            $res['DesensWay'] = $this->desensWay;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->sceneCode) {
            $res['SceneCode'] = $this->sceneCode;
        }

        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CheckWatermark'])) {
            $model->checkWatermark = $map['CheckWatermark'];
        }

        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }

        if (isset($map['DesenMode'])) {
            $model->desenMode = $map['DesenMode'];
        }

        if (isset($map['DesensPlan'])) {
            $model->desensPlan = desensPlan::fromMap($map['DesensPlan']);
        }

        if (isset($map['DesensRule'])) {
            $model->desensRule = $map['DesensRule'];
        }

        if (isset($map['DesensWay'])) {
            $model->desensWay = $map['DesensWay'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['SceneCode'])) {
            $model->sceneCode = $map['SceneCode'];
        }

        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
