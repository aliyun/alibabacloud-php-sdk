<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors\optionJson;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expectNonExistString) {
            $res['expect_non_exist_string'] = $this->expectNonExistString;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return expectNonExistString
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['expect_non_exist_string'])) {
            if (!empty($map['expect_non_exist_string'])) {
                $model->expectNonExistString = $map['expect_non_exist_string'];
            }
        }

        return $model;
    }
}
