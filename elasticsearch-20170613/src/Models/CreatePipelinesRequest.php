<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class CreatePipelinesRequest extends Model
{
    /**
     * @var bool
     */
    public $trigger;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'trigger'     => 'trigger',
        'clientToken' => 'ClientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->trigger) {
            $res['trigger'] = $this->trigger;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePipelinesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['trigger'])) {
            $model->trigger = $map['trigger'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
