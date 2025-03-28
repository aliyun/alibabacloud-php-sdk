<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class Installation extends Model
{
    /**
     * @var string
     */
    public $actionUri;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $stage;
    protected $_name = [
        'actionUri' => 'actionUri',
        'message' => 'message',
        'stage' => 'stage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
