<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class ListStoreViewsRequest extends Model
{
    /**
     * @description The dataset name that is used for fuzzy match.
     *
     * @example my_storeview
     *
     * @var string
     */
    public $name;

    /**
     * @description The offset of the datasets to return. Default value: 0.
     *
     * @example 0
     *
     * @var int
     */
    public $offset;

    /**
     * @description The number of datasets to return. Default value: 100.
     *
     * @example 100
     *
     * @var int
     */
    public $size;

    /**
     * @description The type of the datasets to return. By default, datasets are not filtered by type.
     *
     * Valid values:
     *
     *   metricstore
     *
     * <!-- -->
     *
     *   logstore
     *
     * <!-- -->
     * @example logstore
     *
     * @var string
     */
    public $storeType;
    protected $_name = [
        'name'      => 'name',
        'offset'    => 'offset',
        'size'      => 'size',
        'storeType' => 'storeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->storeType) {
            $res['storeType'] = $this->storeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListStoreViewsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['offset'])) {
            $model->offset = $map['offset'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }
        if (isset($map['storeType'])) {
            $model->storeType = $map['storeType'];
        }

        return $model;
    }
}
