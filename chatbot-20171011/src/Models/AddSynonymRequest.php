<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class AddSynonymRequest extends Model
{
    /**
     * @example ac627989eb4f8a98ed05fd098bbae5_p_beebot_public
     *
     * @var string
     */
    public $agentKey;

    /**
     * @var string
     */
    public $coreWordName;

    /**
     * @var string
     */
    public $synonym;
    protected $_name = [
        'agentKey'     => 'AgentKey',
        'coreWordName' => 'CoreWordName',
        'synonym'      => 'Synonym',
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
        if (null !== $this->coreWordName) {
            $res['CoreWordName'] = $this->coreWordName;
        }
        if (null !== $this->synonym) {
            $res['Synonym'] = $this->synonym;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddSynonymRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['CoreWordName'])) {
            $model->coreWordName = $map['CoreWordName'];
        }
        if (isset($map['Synonym'])) {
            $model->synonym = $map['Synonym'];
        }

        return $model;
    }
}
