<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\ListServiceConfigsResponseBody\data\customServiceConf\rules;

use AlibabaCloud\Dara\Model;

class imageScanRule extends Model
{
    /**
     * @var string[]
     */
    public $services;
    protected $_name = [
        'services' => 'Services',
    ];

    public function validate()
    {
        if (\is_array($this->services)) {
            Model::validateArray($this->services);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->services) {
            if (\is_array($this->services)) {
                $res['Services'] = [];
                $n1 = 0;
                foreach ($this->services as $item1) {
                    $res['Services'][$n1++] = $item1;
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
        if (isset($map['Services'])) {
            if (!empty($map['Services'])) {
                $model->services = [];
                $n1 = 0;
                foreach ($map['Services'] as $item1) {
                    $model->services[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
