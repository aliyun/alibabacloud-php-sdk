<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class ListIncidentsRequest extends Model
{
    /**
     * @description 事件级别 P1 P2 P3 P4
     *
     * @var string
     */
    public $incidentLevel;

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
     * @description 影响等级 高：HIGH 低 LOW
     *
     * @var string
     */
    public $effect;

    /**
     * @description 关联服务ID
     *
     * @var int
     */
    public $relationServiceId;

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
     * @description 幂等校验id
     *
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'incidentLevel'     => 'incidentLevel',
        'pageNumber'        => 'pageNumber',
        'pageSize'          => 'pageSize',
        'effect'            => 'effect',
        'relationServiceId' => 'relationServiceId',
        'incidentStatus'    => 'incidentStatus',
        'me'                => 'me',
        'clientToken'       => 'clientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->incidentLevel) {
            $res['incidentLevel'] = $this->incidentLevel;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->effect) {
            $res['effect'] = $this->effect;
        }
        if (null !== $this->relationServiceId) {
            $res['relationServiceId'] = $this->relationServiceId;
        }
        if (null !== $this->incidentStatus) {
            $res['incidentStatus'] = $this->incidentStatus;
        }
        if (null !== $this->me) {
            $res['me'] = $this->me;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
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
        if (isset($map['incidentLevel'])) {
            $model->incidentLevel = $map['incidentLevel'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['effect'])) {
            $model->effect = $map['effect'];
        }
        if (isset($map['relationServiceId'])) {
            $model->relationServiceId = $map['relationServiceId'];
        }
        if (isset($map['incidentStatus'])) {
            $model->incidentStatus = $map['incidentStatus'];
        }
        if (isset($map['me'])) {
            $model->me = $map['me'];
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
