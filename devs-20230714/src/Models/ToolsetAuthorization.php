<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class ToolsetAuthorization extends Model
{
    /**
     * @var string[]
     */
    public $authConfig;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'authConfig' => 'authConfig',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->authConfig)) {
            Model::validateArray($this->authConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authConfig) {
            if (\is_array($this->authConfig)) {
                $res['authConfig'] = [];
                foreach ($this->authConfig as $key1 => $value1) {
                    $res['authConfig'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['authConfig'])) {
            if (!empty($map['authConfig'])) {
                $model->authConfig = [];
                foreach ($map['authConfig'] as $key1 => $value1) {
                    $model->authConfig[$key1] = $value1;
                }
            }
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
