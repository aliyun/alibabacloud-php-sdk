<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DsgDesensPlanAddOrUpdateRequest;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DsgDesensPlanAddOrUpdateRequest\desensRules\desensPlan;
use AlibabaCloud\Tea\Model;

class desensRules extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $checkWatermark;

    /**
     * @description This parameter is required.
     *
     * @example phone
     *
     * @var string
     */
    public $dataType;

    /**
     * @description This parameter is required.
     *
     * @var desensPlan
     */
    public $desensPlan;

    /**
     * @var int
     */
    public $id;

    /**
     * @description This parameter is required.
     *
     * @example test_user
     *
     * @var string
     */
    public $owner;

    /**
     * @description This parameter is required.
     *
     * @example phone_hash
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description This parameter is required.
     *
     * @var int[]
     */
    public $sceneIds;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'checkWatermark' => 'CheckWatermark',
        'dataType'       => 'DataType',
        'desensPlan'     => 'DesensPlan',
        'id'             => 'Id',
        'owner'          => 'Owner',
        'ruleName'       => 'RuleName',
        'sceneIds'       => 'SceneIds',
        'status'         => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkWatermark) {
            $res['CheckWatermark'] = $this->checkWatermark;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->desensPlan) {
            $res['DesensPlan'] = null !== $this->desensPlan ? $this->desensPlan->toMap() : null;
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
        if (null !== $this->sceneIds) {
            $res['SceneIds'] = $this->sceneIds;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return desensRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckWatermark'])) {
            $model->checkWatermark = $map['CheckWatermark'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['DesensPlan'])) {
            $model->desensPlan = desensPlan::fromMap($map['DesensPlan']);
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
        if (isset($map['SceneIds'])) {
            if (!empty($map['SceneIds'])) {
                $model->sceneIds = $map['SceneIds'];
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
