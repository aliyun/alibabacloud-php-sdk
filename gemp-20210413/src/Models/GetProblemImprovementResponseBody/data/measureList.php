<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GetProblemImprovementResponseBody\data;

use AlibabaCloud\Tea\Model;

class measureList extends Model
{
    /**
     * @description 验收标准
     *
     * @var string
     */
    public $checkStandard;

    /**
     * @description 验收人id
     *
     * @var int
     */
    public $checkUserId;

    /**
     * @description 验收人名称
     *
     * @var string
     */
    public $checkUserName;

    /**
     * @description 措施内容
     *
     * @var string
     */
    public $content;

    /**
     * @description 负责人id
     *
     * @var int
     */
    public $directorId;

    /**
     * @description 负责人名称
     *
     * @var string
     */
    public $directorName;

    /**
     * @description 改进措施id 用于删除或更新
     *
     * @var int
     */
    public $measureId;

    /**
     * @description 计划完成时间
     *
     * @var string
     */
    public $planFinishTime;

    /**
     * @description 跟踪人id
     *
     * @var int
     */
    public $stalkerId;

    /**
     * @description 跟踪人名称
     *
     * @var string
     */
    public $stalkerName;

    /**
     * @description UNIMPROVED	状态 IMPROVED 改进 2 未改进UNIMPROVED
     *
     * @var string
     */
    public $status;

    /**
     * @description 措施类型
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'checkStandard'  => 'checkStandard',
        'checkUserId'    => 'checkUserId',
        'checkUserName'  => 'checkUserName',
        'content'        => 'content',
        'directorId'     => 'directorId',
        'directorName'   => 'directorName',
        'measureId'      => 'measureId',
        'planFinishTime' => 'planFinishTime',
        'stalkerId'      => 'stalkerId',
        'stalkerName'    => 'stalkerName',
        'status'         => 'status',
        'type'           => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkStandard) {
            $res['checkStandard'] = $this->checkStandard;
        }
        if (null !== $this->checkUserId) {
            $res['checkUserId'] = $this->checkUserId;
        }
        if (null !== $this->checkUserName) {
            $res['checkUserName'] = $this->checkUserName;
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->directorId) {
            $res['directorId'] = $this->directorId;
        }
        if (null !== $this->directorName) {
            $res['directorName'] = $this->directorName;
        }
        if (null !== $this->measureId) {
            $res['measureId'] = $this->measureId;
        }
        if (null !== $this->planFinishTime) {
            $res['planFinishTime'] = $this->planFinishTime;
        }
        if (null !== $this->stalkerId) {
            $res['stalkerId'] = $this->stalkerId;
        }
        if (null !== $this->stalkerName) {
            $res['stalkerName'] = $this->stalkerName;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return measureList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['checkStandard'])) {
            $model->checkStandard = $map['checkStandard'];
        }
        if (isset($map['checkUserId'])) {
            $model->checkUserId = $map['checkUserId'];
        }
        if (isset($map['checkUserName'])) {
            $model->checkUserName = $map['checkUserName'];
        }
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['directorId'])) {
            $model->directorId = $map['directorId'];
        }
        if (isset($map['directorName'])) {
            $model->directorName = $map['directorName'];
        }
        if (isset($map['measureId'])) {
            $model->measureId = $map['measureId'];
        }
        if (isset($map['planFinishTime'])) {
            $model->planFinishTime = $map['planFinishTime'];
        }
        if (isset($map['stalkerId'])) {
            $model->stalkerId = $map['stalkerId'];
        }
        if (isset($map['stalkerName'])) {
            $model->stalkerName = $map['stalkerName'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
