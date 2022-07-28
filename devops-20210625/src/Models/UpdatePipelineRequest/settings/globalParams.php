<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\UpdatePipelineRequest\settings;

use AlibabaCloud\Tea\Model;

class globalParams extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var bool
     */
    public $mask;

    /**
     * @var bool
     */
    public $runningConfig;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'key'           => 'key',
        'mask'          => 'mask',
        'runningConfig' => 'runningConfig',
        'value'         => 'value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        if (null !== $this->mask) {
            $res['mask'] = $this->mask;
        }
        if (null !== $this->runningConfig) {
            $res['runningConfig'] = $this->runningConfig;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return globalParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }
        if (isset($map['mask'])) {
            $model->mask = $map['mask'];
        }
        if (isset($map['runningConfig'])) {
            $model->runningConfig = $map['runningConfig'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
