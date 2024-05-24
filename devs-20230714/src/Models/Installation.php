<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Tea\Model;

class Installation extends Model
{
    /**
     * @example https://github.com/login/oauth/authorize?client_id=86059a1b2bb20d3e5fc3&scope=repo,repo:status,delete_repo
     *
     * @var string
     */
    public $actionUri;

    /**
     * @example Please click \"actionUri\" to complete the OAuth authorization process
     *
     * @var string
     */
    public $message;

    /**
     * @example finished
     *
     * @var string
     */
    public $stage;
    protected $_name = [
        'actionUri' => 'actionUri',
        'message'   => 'message',
        'stage'     => 'stage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionUri) {
            $res['actionUri'] = $this->actionUri;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->stage) {
            $res['stage'] = $this->stage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Installation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['actionUri'])) {
            $model->actionUri = $map['actionUri'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['stage'])) {
            $model->stage = $map['stage'];
        }

        return $model;
    }
}
