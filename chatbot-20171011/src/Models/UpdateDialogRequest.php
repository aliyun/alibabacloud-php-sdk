<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class UpdateDialogRequest extends Model
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
    public $description;

    /**
     * @example 50120
     *
     * @var int
     */
    public $dialogId;

    /**
     * @var string
     */
    public $dialogName;
    protected $_name = [
        'agentKey'    => 'AgentKey',
        'description' => 'Description',
        'dialogId'    => 'DialogId',
        'dialogName'  => 'DialogName',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dialogId) {
            $res['DialogId'] = $this->dialogId;
        }
        if (null !== $this->dialogName) {
            $res['DialogName'] = $this->dialogName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDialogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DialogId'])) {
            $model->dialogId = $map['DialogId'];
        }
        if (isset($map['DialogName'])) {
            $model->dialogName = $map['DialogName'];
        }

        return $model;
    }
}
