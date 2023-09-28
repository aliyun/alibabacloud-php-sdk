<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListTagOptionsRequest;

use AlibabaCloud\Tea\Model;

class filters extends Model
{
    /**
     * @description Specifies whether to enable the tag option. Valid values:
     *
     *   true (default)
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $active;

    /**
     * @description The full-text search method.
     *
     * @example k1
     *
     * @var string
     */
    public $fullTextSearch;

    /**
     * @description The key of the tag option.
     *
     * @example k1
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of the tag option.
     *
     * @example v1
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'active'         => 'Active',
        'fullTextSearch' => 'FullTextSearch',
        'key'            => 'Key',
        'value'          => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }
        if (null !== $this->fullTextSearch) {
            $res['FullTextSearch'] = $this->fullTextSearch;
        }
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
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }
        if (isset($map['FullTextSearch'])) {
            $model->fullTextSearch = $map['FullTextSearch'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
