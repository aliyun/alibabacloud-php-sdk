<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;

class CreateOptimizeRunRequest extends Model
{
    /**
     * @var mixed
     */
    public $input;

    /**
     * @var bool
     */
    public $preview;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'input' => 'input',
        'preview' => 'preview',
        'clientToken' => 'clientToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->input) {
            $res['input'] = $this->input;
        }

        if (null !== $this->preview) {
            $res['preview'] = $this->preview;
        }

        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
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
        if (isset($map['input'])) {
            $model->input = $map['input'];
        }

        if (isset($map['preview'])) {
            $model->preview = $map['preview'];
        }

        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
