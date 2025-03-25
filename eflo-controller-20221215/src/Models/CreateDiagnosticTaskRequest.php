<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateDiagnosticTaskRequest\aiJobLogInfo;

class CreateDiagnosticTaskRequest extends Model
{
    /**
     * @var aiJobLogInfo
     */
    public $aiJobLogInfo;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $diagnosticType;

    /**
     * @var string[]
     */
    public $nodeIds;
    protected $_name = [
        'aiJobLogInfo' => 'AiJobLogInfo',
        'clusterId' => 'ClusterId',
        'diagnosticType' => 'DiagnosticType',
        'nodeIds' => 'NodeIds',
    ];

    public function validate()
    {
        if (null !== $this->aiJobLogInfo) {
            $this->aiJobLogInfo->validate();
        }
        if (\is_array($this->nodeIds)) {
            Model::validateArray($this->nodeIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiJobLogInfo) {
            $res['AiJobLogInfo'] = null !== $this->aiJobLogInfo ? $this->aiJobLogInfo->toArray($noStream) : $this->aiJobLogInfo;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->diagnosticType) {
            $res['DiagnosticType'] = $this->diagnosticType;
        }

        if (null !== $this->nodeIds) {
            if (\is_array($this->nodeIds)) {
                $res['NodeIds'] = [];
                $n1 = 0;
                foreach ($this->nodeIds as $item1) {
                    $res['NodeIds'][$n1++] = $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->nodeIds = [];
                $n1 = 0;
                foreach ($map['NodeIds'] as $item1) {
                    $model->nodeIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
