<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypesResponseBody\instanceTypes\instanceType;

use AlibabaCloud\Dara\Model;

class supportedBootModes extends Model
{
    /**
     * @var string[]
     */
    public $supportedBootMode;
    protected $_name = [
        'supportedBootMode' => 'SupportedBootMode',
    ];

    public function validate()
    {
        if (\is_array($this->supportedBootMode)) {
            Model::validateArray($this->supportedBootMode);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->supportedBootMode) {
            if (\is_array($this->supportedBootMode)) {
                $res['SupportedBootMode'] = [];
                $n1 = 0;
                foreach ($this->supportedBootMode as $item1) {
                    $res['SupportedBootMode'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['SupportedBootMode'])) {
            if (!empty($map['SupportedBootMode'])) {
                $model->supportedBootMode = [];
                $n1 = 0;
                foreach ($map['SupportedBootMode'] as $item1) {
                    $model->supportedBootMode[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
