<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class ListLayerVersionsRequest extends Model
{
    /**
     * @description The maximum number of resources to return. Default value: 20. The value cannot exceed 100. The number of returned configurations is less than or equal to the specified number.
     *
     * @example 20
     *
     * @var int
     */
    public $limit;

    /**
     * @description The initial version of the layer.
     *
     * @example 1
     *
     * @var int
     */
    public $startVersion;
    protected $_name = [
        'limit'        => 'limit',
        'startVersion' => 'startVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }
        if (null !== $this->startVersion) {
            $res['startVersion'] = $this->startVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLayerVersionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }
        if (isset($map['startVersion'])) {
            $model->startVersion = $map['startVersion'];
        }

        return $model;
    }
}
