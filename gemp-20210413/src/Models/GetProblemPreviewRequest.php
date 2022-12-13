<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class GetProblemPreviewRequest extends Model
{
    /**
     * @example 4361a0e1-6747-4834-96ce-0c4840f13812
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var int[]
     */
    public $effectServiceIds;

    /**
     * @example 213123
     *
     * @var int
     */
    public $incidentId;

    /**
     * @example 12312
     *
     * @var int
     */
    public $problemId;

    /**
     * @example P2
     *
     * @var string
     */
    public $problemLevel;

    /**
     * @example PROBLEM_NOTIFY
     *
     * @var string
     */
    public $problemNotifyType;

    /**
     * @example 21312
     *
     * @var int
     */
    public $relatedServiceId;

    /**
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
