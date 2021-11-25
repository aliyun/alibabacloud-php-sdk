<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class UpdateFaceGroupRequest extends Model
{
    /**
     * @var string
     */
    public $externalId;

    /**
     * @var string
     */
    public $groupCoverFaceId;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $remarksA;

    /**
     * @var string
     */
    public $remarksArrayA;

    /**
     * @var string
     */
    public $remarksArrayB;

    /**
     * @var string
     */
    public $remarksB;

    /**
     * @var string
     */
    public $remarksC;

    /**
     * @var string
     */
    public $remarksD;

    /**
     * @var string
     */
    public $resetItems;

    /**
     * @var string
     */
    public $setId;
    protected $_name = [
        'externalId'       => 'ExternalId',
        'groupCoverFaceId' => 'GroupCoverFaceId',
        'groupId'          => 'GroupId',
        'groupName'        => 'GroupName',
        'project'          => 'Project',
        'remarksA'         => 'RemarksA',
        'remarksArrayA'    => 'RemarksArrayA',
        'remarksArrayB'    => 'RemarksArrayB',
        'remarksB'         => 'RemarksB',
        'remarksC'         => 'RemarksC',
        'remarksD'         => 'RemarksD',
        'resetItems'       => 'ResetItems',
        'setId'            => 'SetId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->externalId) {
            $res['ExternalId'] = $this->externalId;
        }
        if (null !== $this->groupCoverFaceId) {
            $res['GroupCoverFaceId'] = $this->groupCoverFaceId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->remarksA) {
            $res['RemarksA'] = $this->remarksA;
        }
        if (null !== $this->remarksArrayA) {
            $res['RemarksArrayA'] = $this->remarksArrayA;
        }
        if (null !== $this->remarksArrayB) {
            $res['RemarksArrayB'] = $this->remarksArrayB;
        }
        if (null !== $this->remarksB) {
            $res['RemarksB'] = $this->remarksB;
        }
        if (null !== $this->remarksC) {
            $res['RemarksC'] = $this->remarksC;
        }
        if (null !== $this->remarksD) {
            $res['RemarksD'] = $this->remarksD;
        }
        if (null !== $this->resetItems) {
            $res['ResetItems'] = $this->resetItems;
        }
        if (null !== $this->setId) {
            $res['SetId'] = $this->setId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateFaceGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExternalId'])) {
            $model->externalId = $map['ExternalId'];
        }
        if (isset($map['GroupCoverFaceId'])) {
            $model->groupCoverFaceId = $map['GroupCoverFaceId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['RemarksA'])) {
            $model->remarksA = $map['RemarksA'];
        }
        if (isset($map['RemarksArrayA'])) {
            $model->remarksArrayA = $map['RemarksArrayA'];
        }
        if (isset($map['RemarksArrayB'])) {
            $model->remarksArrayB = $map['RemarksArrayB'];
        }
        if (isset($map['RemarksB'])) {
            $model->remarksB = $map['RemarksB'];
        }
        if (isset($map['RemarksC'])) {
            $model->remarksC = $map['RemarksC'];
        }
        if (isset($map['RemarksD'])) {
            $model->remarksD = $map['RemarksD'];
        }
        if (isset($map['ResetItems'])) {
            $model->resetItems = $map['ResetItems'];
        }
        if (isset($map['SetId'])) {
            $model->setId = $map['SetId'];
        }

        return $model;
    }
}
