<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteFunctionRequest;

use AlibabaCloud\Tea\Model;

class cnameFlattening extends Model
{
    /**
     * @description The CNAME flattening mode. Valid values:
     *
     *   flatten_all: flattens all CNAMEs.
     *   flatten_all (default): flattens only the root domain.
     *
     * @example on
     *
     * @var string
     */
    public $flattenMode;
    protected $_name = [
        'flattenMode' => 'FlattenMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flattenMode) {
            $res['FlattenMode'] = $this->flattenMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cnameFlattening
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FlattenMode'])) {
            $model->flattenMode = $map['FlattenMode'];
        }

        return $model;
    }
}
