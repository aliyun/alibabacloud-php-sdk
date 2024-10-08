<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models;

use AlibabaCloud\Tea\Model;

class CreateFilterRequest extends Model
{
    /**
     * @description The configurations of the filter.
     *
     * This parameter is required.
     * @example {
     * }
     * @var string
     */
    public $filterConfiguration;

    /**
     * @description The name of the filter.
     *
     * This parameter is required.
     * @example ECS
     *
     * @var string
     */
    public $filterName;
    protected $_name = [
        'filterConfiguration' => 'FilterConfiguration',
        'filterName'          => 'FilterName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filterConfiguration) {
            $res['FilterConfiguration'] = $this->filterConfiguration;
        }
        if (null !== $this->filterName) {
            $res['FilterName'] = $this->filterName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFilterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FilterConfiguration'])) {
            $model->filterConfiguration = $map['FilterConfiguration'];
        }
        if (isset($map['FilterName'])) {
            $model->filterName = $map['FilterName'];
        }

        return $model;
    }
}
