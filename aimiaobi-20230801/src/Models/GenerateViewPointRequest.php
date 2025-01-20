<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GenerateViewPointRequest\referenceData;

class GenerateViewPointRequest extends Model
{
    /**
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
        if (null !== $this->referenceData) {
            $this->referenceData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }

        if (null !== $this->referenceData) {
            $res['ReferenceData'] = null !== $this->referenceData ? $this->referenceData->toArray($noStream) : $this->referenceData;
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
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }

        if (isset($map['ReferenceData'])) {
            $model->referenceData = referenceData::fromMap($map['ReferenceData']);
        }

        return $model;
    }
}
