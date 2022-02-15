<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class ListIncidentsRequest extends Model
{
    /**
     * @description 幂等校验id
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description 创建结束时间
     *
     * @var string
     */
    public $createEndTime;

    /**
     * @description 创建开始时间
     *
     * @var string
     */
    public $createStartTime;

    /**
     * @description 影响等级 高：HIGH 低 LOW
     *
     * @var string
     */
    public $effect;

    /**
     * @description 事件级别 P1 P2 P3 P4
     *
     * @var string
     */
    public $incidentLevel;

    /**
     * @description 事件状态 ASSIGNED已分派 RESPONDED已响应  FINISHED已完结
     *
     * @var string
     */
    public $incidentStatus;

    /**
     * @description 是否自己 1是 0不是
     *
     * @var int
     */
    public $me;

    /**
     * @description 页
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 行
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 关联服务ID
     *
     * @var int
     */
    public $relationServiceId;

    /**
     * @description 流转规则名字
     *
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'clientToken'       => 'clientToken',
        'createEndTime'     => 'createEndTime',
        'createStartTime'   => 'createStartTime',
        'effect'            => 'effect',
        'incidentLevel'     => 'incidentLevel',
        'incidentStatus'    => 'incidentStatus',
        'me'                => 'me',
        'pageNumber'        => 'pageNumber',
        'pageSize'          => 'pageSize',
        'relationServiceId' => 'relationServiceId',
        'ruleName'          => 'ruleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->createEndTime) {
            $res['createEndTime'] = $this->createEndTime;
        }
        if (null !== $this->createStartTime) {
            $res['createStartTime'] = $this->createStartTime;
        }
        if (null !== $this->effect) {
            $res['effect'] = $this->effect;
        }
        if (null !== $this->incidentLevel) {
            $res['incidentLevel'] = $this->incidentLevel;
        }
        if (null !== $this->incidentStatus) {
            $res['incidentStatus'] = $this->incidentStatus;
        }
        if (null !== $this->me) {
            $res['me'] = $this->me;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->relationServiceId) {
            $res['relationServiceId'] = $this->relationServiceId;
        }
        if (null !== $this->ruleName) {
            $res['ruleName'] = $this->ruleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIncidentsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['createEndTime'])) {
            $model->createEndTime = $map['createEndTime'];
        }
        if (isset($map['createStartTime'])) {
            $model->createStartTime = $map['createStartTime'];
        }
        if (isset($map['effect'])) {
            $model->effect = $map['effect'];
        }
        if (isset($map['incidentLevel'])) {
            $model->incidentLevel = $map['incidentLevel'];
        }
        if (isset($map['incidentStatus'])) {
            $model->incidentStatus = $map['incidentStatus'];
        }
        if (isset($map['me'])) {
            $model->me = $map['me'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['relationServiceId'])) {
            $model->relationServiceId = $map['relationServiceId'];
        }
        if (isset($map['ruleName'])) {
            $model->ruleName = $map['ruleName'];
        }

        return $model;
    }
}
