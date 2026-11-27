<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class AiBasicGuardrailConfig extends Model
{
    /**
     * @var bool
     */
    public $display;

    /**
     * @var bool
     */
    public $responseEnabled;

    /**
     * @var string
     */
    public $responseMode;
    protected $_name = [
        'display' => 'display',
        'responseEnabled' => 'responseEnabled',
        'responseMode' => 'responseMode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->display) {
            $res['display'] = $this->display;
        }

        if (null !== $this->responseEnabled) {
            $res['responseEnabled'] = $this->responseEnabled;
        }

        if (null !== $this->responseMode) {
            $res['responseMode'] = $this->responseMode;
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
        if (isset($map['display'])) {
            $model->display = $map['display'];
        }

        if (isset($map['responseEnabled'])) {
            $model->responseEnabled = $map['responseEnabled'];
        }

        if (isset($map['responseMode'])) {
            $model->responseMode = $map['responseMode'];
        }

        return $model;
    }
}
