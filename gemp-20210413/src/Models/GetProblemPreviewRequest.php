<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class GetProblemPreviewRequest extends Model
{
    /**
     * @description 幂等校验token
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description 影响服务
     *
     * @var int[]
     */
    public $effectServiceIds;

    /**
     * @description 事件Id
     *
     * @var int
     */
    public $incidentId;

    /**
     * @description 故障id
     *
     * @var int
     */
    public $problemId;

    /**
     * @description 故障等级
     *
     * @var string
     */
    public $problemLevel;

    /**
     * @description 通告类型
     *
     * @var string
     */
    public $problemNotifyType;

    /**
     * @description 所属服务
     *
     * @var int
     */
    public $relatedServiceId;

    /**
     * @description 应急协同组
     *
     * @var int[]
     */
    public $serviceGroupIds;
    protected $_name = [
        'clientToken'       => 'clientToken',
        'effectServiceIds'  => 'effectServiceIds',
        'incidentId'        => 'incidentId',
        'problemId'         => 'problemId',
        'problemLevel'      => 'problemLevel',
        'problemNotifyType' => 'problemNotifyType',
        'relatedServiceId'  => 'relatedServiceId',
        'serviceGroupIds'   => 'serviceGroupIds',
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
        if (null !== $this->effectServiceIds) {
            $res['effectServiceIds'] = $this->effectServiceIds;
        }
        if (null !== $this->incidentId) {
            $res['incidentId'] = $this->incidentId;
        }
        if (null !== $this->problemId) {
            $res['problemId'] = $this->problemId;
        }
        if (null !== $this->problemLevel) {
            $res['problemLevel'] = $this->problemLevel;
        }
        if (null !== $this->problemNotifyType) {
            $res['problemNotifyType'] = $this->problemNotifyType;
        }
        if (null !== $this->relatedServiceId) {
            $res['relatedServiceId'] = $this->relatedServiceId;
        }
        if (null !== $this->serviceGroupIds) {
            $res['serviceGroupIds'] = $this->serviceGroupIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetProblemPreviewRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['effectServiceIds'])) {
            if (!empty($map['effectServiceIds'])) {
                $model->effectServiceIds = $map['effectServiceIds'];
            }
        }
        if (isset($map['incidentId'])) {
            $model->incidentId = $map['incidentId'];
        }
        if (isset($map['problemId'])) {
            $model->problemId = $map['problemId'];
        }
        if (isset($map['problemLevel'])) {
            $model->problemLevel = $map['problemLevel'];
        }
        if (isset($map['problemNotifyType'])) {
            $model->problemNotifyType = $map['problemNotifyType'];
        }
        if (isset($map['relatedServiceId'])) {
            $model->relatedServiceId = $map['relatedServiceId'];
        }
        if (isset($map['serviceGroupIds'])) {
            if (!empty($map['serviceGroupIds'])) {
                $model->serviceGroupIds = $map['serviceGroupIds'];
            }
        }

        return $model;
    }
}
