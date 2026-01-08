<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ListInstagramPageResponseBody\data;

use AlibabaCloud\Dara\Model;

class agentInfo extends Model
{
    /**
     * @var string
     */
    public $agentKeywords;

    /**
     * @var string
     */
    public $agentNoKeywords;
    protected $_name = [
        'agentKeywords' => 'AgentKeywords',
        'agentNoKeywords' => 'AgentNoKeywords',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentKeywords) {
            $res['AgentKeywords'] = $this->agentKeywords;
        }

        if (null !== $this->agentNoKeywords) {
            $res['AgentNoKeywords'] = $this->agentNoKeywords;
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
        if (isset($map['AgentKeywords'])) {
            $model->agentKeywords = $map['AgentKeywords'];
        }

        if (isset($map['AgentNoKeywords'])) {
            $model->agentNoKeywords = $map['AgentNoKeywords'];
        }

        return $model;
    }
}
