<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceInspectionResponseBody\config;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var mixed
     */
    public $parameters;

    /**
     * @var string
     */
    public $templateCode;
    protected $_name = [
        'parameters' => 'parameters',
        'templateCode' => 'templateCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->parameters) {
            $res['parameters'] = $this->parameters;
        }

        if (null !== $this->templateCode) {
            $res['templateCode'] = $this->templateCode;
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
        if (isset($map['parameters'])) {
            $model->parameters = $map['parameters'];
        }

        if (isset($map['templateCode'])) {
            $model->templateCode = $map['templateCode'];
        }

        return $model;
    }
}
