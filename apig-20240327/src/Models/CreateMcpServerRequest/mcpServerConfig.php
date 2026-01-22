<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\CreateMcpServerRequest;

use AlibabaCloud\Dara\Model;

class mcpServerConfig extends Model
{
    /**
     * @var string
     */
    public $mcpServerSpec;

    /**
     * @var string
     */
    public $swaggerConfig;
    protected $_name = [
        'mcpServerSpec' => 'mcpServerSpec',
        'swaggerConfig' => 'swaggerConfig',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mcpServerSpec) {
            $res['mcpServerSpec'] = $this->mcpServerSpec;
        }

        if (null !== $this->swaggerConfig) {
            $res['swaggerConfig'] = $this->swaggerConfig;
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
        if (isset($map['mcpServerSpec'])) {
            $model->mcpServerSpec = $map['mcpServerSpec'];
        }

        if (isset($map['swaggerConfig'])) {
            $model->swaggerConfig = $map['swaggerConfig'];
        }

        return $model;
    }
}
