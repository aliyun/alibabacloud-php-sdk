<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class UpdateAgentInstanceConfigRequest extends Model
{
    /**
     * @var string
     */
    public $attributes;

    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $grayConfigs;
    protected $_name = [
        'attributes' => 'attributes',
        'config' => 'config',
        'grayConfigs' => 'grayConfigs',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributes) {
            $res['attributes'] = $this->attributes;
        }

        if (null !== $this->config) {
            $res['config'] = $this->config;
        }

        if (null !== $this->grayConfigs) {
            $res['grayConfigs'] = $this->grayConfigs;
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
        if (isset($map['attributes'])) {
            $model->attributes = $map['attributes'];
        }

        if (isset($map['config'])) {
            $model->config = $map['config'];
        }

        if (isset($map['grayConfigs'])) {
            $model->grayConfigs = $map['grayConfigs'];
        }

        return $model;
    }
}
