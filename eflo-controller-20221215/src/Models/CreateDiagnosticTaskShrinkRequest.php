<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Tea\Model;

class CreateDiagnosticTaskShrinkRequest extends Model
{
    /**
     * @description Log information
     *
     * @var string
     */
    public $aiJobLogInfoShrink;

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
     * @var string
     */
    public $nodeIdsShrink;
    protected $_name = [
        'aiJobLogInfoShrink' => 'AiJobLogInfo',
        'clusterId'          => 'ClusterId',
        'diagnosticType'     => 'DiagnosticType',
        'nodeIdsShrink'      => 'NodeIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aiJobLogInfoShrink) {
            $res['AiJobLogInfo'] = $this->aiJobLogInfoShrink;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->diagnosticType) {
            $res['DiagnosticType'] = $this->diagnosticType;
        }
        if (null !== $this->nodeIdsShrink) {
            $res['NodeIds'] = $this->nodeIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDiagnosticTaskShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AiJobLogInfo'])) {
            $model->aiJobLogInfoShrink = $map['AiJobLogInfo'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DiagnosticType'])) {
            $model->diagnosticType = $map['DiagnosticType'];
        }
        if (isset($map['NodeIds'])) {
            $model->nodeIdsShrink = $map['NodeIds'];
        }

        return $model;
    }
}
