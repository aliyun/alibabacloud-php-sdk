<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\UpdateNodePoolComponentRequest;

use AlibabaCloud\Dara\Model;

class config extends Model
{
    /**
     * @var string[]
     */
    public $customConfig;
    protected $_name = [
        'customConfig' => 'customConfig',
    ];

    public function validate()
    {
        if (\is_array($this->customConfig)) {
            Model::validateArray($this->customConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customConfig) {
            if (\is_array($this->customConfig)) {
                $res['customConfig'] = [];
                foreach ($this->customConfig as $key1 => $value1) {
                    $res['customConfig'][$key1] = $value1;
                }
            }
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
        if (isset($map['customConfig'])) {
            if (!empty($map['customConfig'])) {
                $model->customConfig = [];
                foreach ($map['customConfig'] as $key1 => $value1) {
                    $model->customConfig[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
