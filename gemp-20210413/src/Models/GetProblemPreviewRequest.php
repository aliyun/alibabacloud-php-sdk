<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class GetProblemPreviewRequest extends Model
{
    /**
     * @description 故障id
     *
     * @var int
     */
    public $problemId;

    /**
     * @description 通告类型
     *
     * @var string
     */
    public $problemNotifyType;

    /**
     * @description 故障等级
     *
     * @var string
     */
    public $problemLevel;

    /**
     * @description 影响服务
     *
     * @var int[]
     */
    public $effectServiceIds;

    /**
     * @description 所属服务
     *
     * @var int
     */
    public $relatedServiceId;

    /**
     * @description 事件Id
     *
     * @var int
     */
    public $incidentId;

    /**
     * @description 应急协同组
     *
     * @var int[]
     */
    public $serviceGroupIds;

    /**
     * @description 幂等校验token
     *
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'problemId'         => 'problemId',
        'problemNotifyType' => 'problemNotifyType',
        'problemLevel'      => 'problemLevel',
        'effectServiceIds'  => 'effectServiceIds',
        'relatedServiceId'  => 'relatedServiceId',
        'incidentId'        => 'incidentId',
        'serviceGroupIds'   => 'serviceGroupIds',
        'clientToken'       => 'clientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->problemId) {
            $res['problemId'] = $this->problemId;
        }
        if (null !== $this->problemNotifyType) {
            $res['problemNotifyType'] = $this->problemNotifyType;
        }
        if (null !== $this->problemLevel) {
            $res['problemLevel'] = $this->problemLevel;
        }
        if (null !== $this->effectServiceIds) {
            $res['effectServiceIds'] = $this->effectServiceIds;
        }
        if (null !== $this->relatedServiceId) {
            $res['relatedServiceId'] = $this->relatedServiceId;
        }
        if (null !== $this->incidentId) {
            $res['incidentId'] = $this->incidentId;
        }
        if (null !== $this->serviceGroupIds) {
            $res['serviceGroupIds'] = $this->serviceGroupIds;
        }
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
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
        if (isset($map['problemId'])) {
            $model->problemId = $map['problemId'];
        }
        if (isset($map['problemNotifyType'])) {
            $model->problemNotifyType = $map['problemNotifyType'];
        }
        if (isset($map['problemLevel'])) {
            $model->problemLevel = $map['problemLevel'];
        }
        if (isset($map['effectServiceIds'])) {
            if (!empty($map['effectServiceIds'])) {
                $model->effectServiceIds = $map['effectServiceIds'];
            }
        }
        if (isset($map['relatedServiceId'])) {
            $model->relatedServiceId = $map['relatedServiceId'];
        }
        if (isset($map['incidentId'])) {
            $model->incidentId = $map['incidentId'];
        }
        if (isset($map['serviceGroupIds'])) {
            if (!empty($map['serviceGroupIds'])) {
                $model->serviceGroupIds = $map['serviceGroupIds'];
            }
        }
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
