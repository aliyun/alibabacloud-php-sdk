<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expectExistString) {
            $res['expect_exist_string'] = $this->expectExistString;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return expectExistString
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['expect_exist_string'])) {
            if (!empty($map['expect_exist_string'])) {
                $model->expectExistString = $map['expect_exist_string'];
            }
        }

        return $model;
    }
}
