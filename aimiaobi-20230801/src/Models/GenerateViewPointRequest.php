<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GenerateViewPointRequest\referenceData;
use AlibabaCloud\Tea\Model;

class GenerateViewPointRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example c160c841c8e54295bf2f441432785944_p_efm
     *
     * @var string
     */
    public $agentKey;

    /**
     * @var referenceData
     */
    public $referenceData;
    protected $_name = [
        'agentKey'      => 'AgentKey',
        'referenceData' => 'ReferenceData',
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
        if (null !== $this->referenceData) {
            $res['ReferenceData'] = null !== $this->referenceData ? $this->referenceData->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateViewPointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['ReferenceData'])) {
            $model->referenceData = referenceData::fromMap($map['ReferenceData']);
        }

        return $model;
    }
}
