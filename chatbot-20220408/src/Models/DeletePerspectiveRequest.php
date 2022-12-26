<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Tea\Model;

class DeletePerspectiveRequest extends Model
{
    /**
     * @example ac627989eb4f8a98ed05fd098bbae5_p_beebot_public
     *
     * @var string
     */
    public $agentKey;

    /**
     * @example 3001
     *
     * @var string
     */
    public $perspectiveId;
    protected $_name = [
        'agentKey'      => 'AgentKey',
        'perspectiveId' => 'PerspectiveId',
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
        if (null !== $this->perspectiveId) {
            $res['PerspectiveId'] = $this->perspectiveId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeletePerspectiveRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['PerspectiveId'])) {
            $model->perspectiveId = $map['PerspectiveId'];
        }

        return $model;
    }
}
