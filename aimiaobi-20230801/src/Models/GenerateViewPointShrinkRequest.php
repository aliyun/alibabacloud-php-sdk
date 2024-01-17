<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class GenerateViewPointShrinkRequest extends Model
{
    /**
     * @example c160c841c8e54295bf2f441432785944_p_efm
     *
     * @var string
     */
    public $agentKey;

    /**
     * @var string
     */
    public $referenceDataShrink;
    protected $_name = [
        'agentKey'            => 'AgentKey',
        'referenceDataShrink' => 'ReferenceData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }
        if (null !== $this->referenceDataShrink) {
            $res['ReferenceData'] = $this->referenceDataShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateViewPointShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['ReferenceData'])) {
            $model->referenceDataShrink = $map['ReferenceData'];
        }

        return $model;
    }
}
