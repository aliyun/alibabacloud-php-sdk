<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class DescribeEnumItemsRequest extends Model
{
    /**
     * @description The type of the enumeration item. Valid values:
     *
     *   **process**: scenarios
     *
     * This parameter is required.
     * @example process
     *
     * @var string
     */
    public $enumType;

    /**
     * @description The language of the content within the request and response. Valid values:
     *
     *   **zh_cn**: Simplified Chinese (default)
     *   **en_us**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;
    protected $_name = [
        'enumType' => 'EnumType',
        'lang'     => 'Lang',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enumType) {
            $res['EnumType'] = $this->enumType;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEnumItemsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnumType'])) {
            $model->enumType = $map['EnumType'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
