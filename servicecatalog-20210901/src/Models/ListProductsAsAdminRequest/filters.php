<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListProductsAsAdminRequest;

use AlibabaCloud\Tea\Model;

class filters extends Model
{
    /**
     * @description The name of the filter condition. Valid values:
     *
     *   ProductName: performs exact matches by product name. Product names are not case-sensitive.
     *   FullTextSearch: performs full-text searches by product name, product provider, or product description. Fuzzy match is supported.
     *
     * @example ProductName
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of the filter condition.
     *
     * @example DEMO-Create an ECS instance
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'   => 'Key',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
