<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\Nodepool\nodeComponents;

use AlibabaCloud\Dara\Model;

class config extends Model
{
    /**
     * @var string[]
     */
    public $customConfig;
    protected $_name = [
        'customConfig' => 'custom_config',
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
                $res['custom_config'] = [];
                foreach ($this->customConfig as $key1 => $value1) {
                    $res['custom_config'][$key1] = $value1;
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
        if (isset($map['custom_config'])) {
            if (!empty($map['custom_config'])) {
                $model->customConfig = [];
                foreach ($map['custom_config'] as $key1 => $value1) {
                    $model->customConfig[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
