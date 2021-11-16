<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class FinishIncidentRequest extends Model
{
    /**
     * @description 幂等校验Id
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description 完结原因
     *
     * @var int
     */
    public $incidentFinishReason;

    /**
     * @description 原因描述
     *
     * @var string
     */
    public $incidentFinishReasonDescription;

    /**
     * @description 解决方案
     *
     * @var int
     */
    public $incidentFinishSolution;

    /**
     * @description 解决方案描述
     *
     * @var string
     */
    public $incidentFinishSolutionDescription;

    /**
     * @description 事件ID数组
     *
     * @var int[]
     */
    public $incidentIds;
    protected $_name = [
        'clientToken'                       => 'clientToken',
        'incidentFinishReason'              => 'incidentFinishReason',
        'incidentFinishReasonDescription'   => 'incidentFinishReasonDescription',
        'incidentFinishSolution'            => 'incidentFinishSolution',
        'incidentFinishSolutionDescription' => 'incidentFinishSolutionDescription',
        'incidentIds'                       => 'incidentIds',
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
        if (null !== $this->incidentFinishReason) {
            $res['incidentFinishReason'] = $this->incidentFinishReason;
        }
        if (null !== $this->incidentFinishReasonDescription) {
            $res['incidentFinishReasonDescription'] = $this->incidentFinishReasonDescription;
        }
        if (null !== $this->incidentFinishSolution) {
            $res['incidentFinishSolution'] = $this->incidentFinishSolution;
        }
        if (null !== $this->incidentFinishSolutionDescription) {
            $res['incidentFinishSolutionDescription'] = $this->incidentFinishSolutionDescription;
        }
        if (null !== $this->incidentIds) {
            $res['incidentIds'] = $this->incidentIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FinishIncidentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['incidentFinishReason'])) {
            $model->incidentFinishReason = $map['incidentFinishReason'];
        }
        if (isset($map['incidentFinishReasonDescription'])) {
            $model->incidentFinishReasonDescription = $map['incidentFinishReasonDescription'];
        }
        if (isset($map['incidentFinishSolution'])) {
            $model->incidentFinishSolution = $map['incidentFinishSolution'];
        }
        if (isset($map['incidentFinishSolutionDescription'])) {
            $model->incidentFinishSolutionDescription = $map['incidentFinishSolutionDescription'];
        }
        if (isset($map['incidentIds'])) {
            if (!empty($map['incidentIds'])) {
                $model->incidentIds = $map['incidentIds'];
            }
        }

        return $model;
    }
}
