<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models;

use AlibabaCloud\Tea\Model;

class CreateRuleRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @example [{"sequence":1,"actions":[{"name":"id_card_recognize"}]},{"sequence":2,"actions":[{"name":"document_title_recognize"},{"name":"flip_action_recognize"},{"name":"sign_action_recognize"}]},{"sequence":3,"actions":[{"name":"sign_recognize"}]},{"sequence":0,"actions":[{"name":"face_track"},{"name":"speech_to_text"}]}]
     *
     * @var string
     */
    public $content;

    /**
     * @example default
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'content'     => 'Content',
        'name'        => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
