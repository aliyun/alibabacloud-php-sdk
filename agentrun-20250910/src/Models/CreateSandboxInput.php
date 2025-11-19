<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class CreateSandboxInput extends Model
{
    /**
     * @var int
     */
    public $sandboxIdleTimeoutSeconds;

    /**
     * @var string
     */
    public $templateName;
    protected $_name = [
        'sandboxIdleTimeoutSeconds' => 'sandboxIdleTimeoutSeconds',
        'templateName' => 'templateName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sandboxIdleTimeoutSeconds) {
            $res['sandboxIdleTimeoutSeconds'] = $this->sandboxIdleTimeoutSeconds;
        }

        if (null !== $this->templateName) {
            $res['templateName'] = $this->templateName;
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
        if (isset($map['sandboxIdleTimeoutSeconds'])) {
            $model->sandboxIdleTimeoutSeconds = $map['sandboxIdleTimeoutSeconds'];
        }

        if (isset($map['templateName'])) {
            $model->templateName = $map['templateName'];
        }

        return $model;
    }
}
