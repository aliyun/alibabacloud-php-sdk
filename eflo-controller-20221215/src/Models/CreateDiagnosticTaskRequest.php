<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateDiagnosticTaskRequest\aiJobLogInfo;
use AlibabaCloud\Tea\Model;

class CreateDiagnosticTaskRequest extends Model
{
    /**
     * @description Log information
     *
     * @var aiJobLogInfo
     */
    public $aiJobLogInfo;

    /**
     * @description Cluster ID
     *
     * @example i118913031696573280136
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description Diagnostic type.
     *
     * @example CheckByAiJobLogs
     *
     * @var string
     */
    public $diagnosticType;

    /**
     * @description List of node IDs
     *
     * @var string[]
     */
    public $nodeIds;
    protected $_name = [
        'aiJobLogInfo' => 'AiJobLogInfo',
        'clusterId' => 'ClusterId',
        'diagnosticType' => 'DiagnosticType',
        'nodeIds' => 'NodeIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aiJobLogInfo) {
            $res['AiJobLogInfo'] = null !== $this->aiJobLogInfo ? $this->aiJobLogInfo->toMap() : null;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->diagnosticType) {
            $res['DiagnosticType'] = $this->diagnosticType;
        }
        if (null !== $this->nodeIds) {
            $res['NodeIds'] = $this->nodeIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDiagnosticTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AiJobLogInfo'])) {
            $model->aiJobLogInfo = aiJobLogInfo::fromMap($map['AiJobLogInfo']);
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DiagnosticType'])) {
            $model->diagnosticType = $map['DiagnosticType'];
        }
        if (isset($map['NodeIds'])) {
            if (!empty($map['NodeIds'])) {
                $model->nodeIds = $map['NodeIds'];
            }
        }

        return $model;
    }
}
