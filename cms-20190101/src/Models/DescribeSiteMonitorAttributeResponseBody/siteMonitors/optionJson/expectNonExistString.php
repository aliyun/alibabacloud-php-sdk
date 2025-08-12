<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson;

use AlibabaCloud\Dara\Model;

class expectNonExistString extends Model
{
    /**
     * @var string[]
     */
    public $expectNonExistString;
    protected $_name = [
        'expectNonExistString' => 'expect_non_exist_string',
    ];

    public function validate()
    {
        if (\is_array($this->expectNonExistString)) {
            Model::validateArray($this->expectNonExistString);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expectNonExistString) {
            if (\is_array($this->expectNonExistString)) {
                $res['expect_non_exist_string'] = [];
                $n1 = 0;
                foreach ($this->expectNonExistString as $item1) {
                    $res['expect_non_exist_string'][$n1] = $item1;
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
        if (isset($map['expect_non_exist_string'])) {
            if (!empty($map['expect_non_exist_string'])) {
                $model->expectNonExistString = [];
                $n1 = 0;
                foreach ($map['expect_non_exist_string'] as $item1) {
                    $model->expectNonExistString[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
