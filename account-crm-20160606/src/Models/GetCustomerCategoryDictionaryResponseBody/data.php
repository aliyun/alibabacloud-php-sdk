<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models\GetCustomerCategoryDictionaryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Accountcrm\V20160606\Models\GetCustomerCategoryDictionaryResponseBody\data\enumConfig;

class data extends Model
{
    /**
     * @var enumConfig[]
     */
    public $enumConfig;
    protected $_name = [
        'enumConfig' => 'EnumConfig',
    ];

    public function validate()
    {
        if (\is_array($this->enumConfig)) {
            Model::validateArray($this->enumConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enumConfig) {
            if (\is_array($this->enumConfig)) {
                $res['EnumConfig'] = [];
                $n1 = 0;
                foreach ($this->enumConfig as $item1) {
                    $res['EnumConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EnumConfig'])) {
            if (!empty($map['EnumConfig'])) {
                $model->enumConfig = [];
                $n1 = 0;
                foreach ($map['EnumConfig'] as $item1) {
                    $model->enumConfig[$n1] = enumConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
