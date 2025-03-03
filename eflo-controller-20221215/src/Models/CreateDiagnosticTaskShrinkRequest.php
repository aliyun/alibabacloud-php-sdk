<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;

class CreateDiagnosticTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $aiJobLogInfoShrink;
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var string
     */
    public $diagnosticType;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
