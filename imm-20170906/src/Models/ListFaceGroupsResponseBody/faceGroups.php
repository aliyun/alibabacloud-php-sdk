<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models\ListFaceGroupsResponseBody;

use AlibabaCloud\SDK\Imm\V20170906\Models\ListFaceGroupsResponseBody\faceGroups\groupCoverFace;
use AlibabaCloud\Tea\Model;

class faceGroups extends Model
{
    /**
     * @var float
     */
    public $averageAge;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $externalId;

    /**
     * @var int
     */
    public $faceCount;

    /**
     * @var string
     */
    public $gender;

    /**
     * @var groupCoverFace
     */
    public $groupCoverFace;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var int
     */
    public $imageCount;

    /**
     * @var float
     */
    public $maxAge;

    /**
     * @var float
     */
    public $minAge;

    /**
     * @var string
     */
    public $modifyTime;

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
    protected $_name = [
        'averageAge'     => 'AverageAge',
        'createTime'     => 'CreateTime',
        'externalId'     => 'ExternalId',
        'faceCount'      => 'FaceCount',
        'gender'         => 'Gender',
        'groupCoverFace' => 'GroupCoverFace',
        'groupId'        => 'GroupId',
        'groupName'      => 'GroupName',
        'imageCount'     => 'ImageCount',
        'maxAge'         => 'MaxAge',
        'minAge'         => 'MinAge',
        'modifyTime'     => 'ModifyTime',
        'remarksA'       => 'RemarksA',
        'remarksArrayA'  => 'RemarksArrayA',
        'remarksArrayB'  => 'RemarksArrayB',
        'remarksB'       => 'RemarksB',
        'remarksC'       => 'RemarksC',
        'remarksD'       => 'RemarksD',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->averageAge) {
            $res['AverageAge'] = $this->averageAge;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->externalId) {
            $res['ExternalId'] = $this->externalId;
        }
        if (null !== $this->faceCount) {
            $res['FaceCount'] = $this->faceCount;
        }
        if (null !== $this->gender) {
            $res['Gender'] = $this->gender;
        }
        if (null !== $this->groupCoverFace) {
            $res['GroupCoverFace'] = null !== $this->groupCoverFace ? $this->groupCoverFace->toMap() : null;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->imageCount) {
            $res['ImageCount'] = $this->imageCount;
        }
        if (null !== $this->maxAge) {
            $res['MaxAge'] = $this->maxAge;
        }
        if (null !== $this->minAge) {
            $res['MinAge'] = $this->minAge;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return faceGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AverageAge'])) {
            $model->averageAge = $map['AverageAge'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ExternalId'])) {
            $model->externalId = $map['ExternalId'];
        }
        if (isset($map['FaceCount'])) {
            $model->faceCount = $map['FaceCount'];
        }
        if (isset($map['Gender'])) {
            $model->gender = $map['Gender'];
        }
        if (isset($map['GroupCoverFace'])) {
            $model->groupCoverFace = groupCoverFace::fromMap($map['GroupCoverFace']);
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['ImageCount'])) {
            $model->imageCount = $map['ImageCount'];
        }
        if (isset($map['MaxAge'])) {
            $model->maxAge = $map['MaxAge'];
        }
        if (isset($map['MinAge'])) {
            $model->minAge = $map['MinAge'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
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

        return $model;
    }
}
