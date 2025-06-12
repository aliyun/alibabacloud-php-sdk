<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Dara\Model;

class UpdateInstanceSettingsRequest extends Model
{
    /**
     * @var string
     */
    public $body;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $force;

    /**
     * @var string
     */
    public $updateStrategy;
    protected $_name = [
        'body' => 'body',
        'clientToken' => 'clientToken',
        'force' => 'force',
        'updateStrategy' => 'updateStrategy',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }

        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        if (null !== $this->force) {
            $res['force'] = $this->force;
        }

        if (null !== $this->updateStrategy) {
            $res['updateStrategy'] = $this->updateStrategy;
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
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }

        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        if (isset($map['force'])) {
            $model->force = $map['force'];
        }

        if (isset($map['updateStrategy'])) {
            $model->updateStrategy = $map['updateStrategy'];
        }

        return $model;
    }
}
