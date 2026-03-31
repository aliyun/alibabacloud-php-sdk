<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListEntitiesResponseBody\data\responseData;

use AlibabaCloud\Dara\Model;

class agentDisposes extends Model
{
    /**
     * @var string
     */
    public $agentDisposalMethod;

    /**
     * @var string
     */
    public $agentDisposalPlaybookUuid;
    protected $_name = [
        'agentDisposalMethod' => 'AgentDisposalMethod',
        'agentDisposalPlaybookUuid' => 'AgentDisposalPlaybookUuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentDisposalMethod) {
            $res['AgentDisposalMethod'] = $this->agentDisposalMethod;
        }

        if (null !== $this->agentDisposalPlaybookUuid) {
            $res['AgentDisposalPlaybookUuid'] = $this->agentDisposalPlaybookUuid;
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
        if (isset($map['AgentDisposalMethod'])) {
            $model->agentDisposalMethod = $map['AgentDisposalMethod'];
        }

        if (isset($map['AgentDisposalPlaybookUuid'])) {
            $model->agentDisposalPlaybookUuid = $map['AgentDisposalPlaybookUuid'];
        }

        return $model;
    }
}
