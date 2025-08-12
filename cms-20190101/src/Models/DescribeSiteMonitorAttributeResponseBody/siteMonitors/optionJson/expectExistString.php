<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson;

use AlibabaCloud\Dara\Model;

class expectExistString extends Model
{
    /**
     * @var string[]
     */
    public $expectExistString;
    protected $_name = [
        'expectExistString' => 'expect_exist_string',
    ];

    public function validate()
    {
        if (\is_array($this->expectExistString)) {
            Model::validateArray($this->expectExistString);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expectExistString) {
            if (\is_array($this->expectExistString)) {
                $res['expect_exist_string'] = [];
                $n1 = 0;
                foreach ($this->expectExistString as $item1) {
                    $res['expect_exist_string'][$n1] = $item1;
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
        if (isset($map['expect_exist_string'])) {
            if (!empty($map['expect_exist_string'])) {
                $model->expectExistString = [];
                $n1 = 0;
                foreach ($map['expect_exist_string'] as $item1) {
                    $model->expectExistString[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
