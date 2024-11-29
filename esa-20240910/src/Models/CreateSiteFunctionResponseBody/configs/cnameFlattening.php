<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\CreateSiteFunctionResponseBody\configs;

use AlibabaCloud\Tea\Model;

class cnameFlattening extends Model
{
    /**
     * @example 352816096987136
     *
     * @var int
     */
    public $configId;

    /**
     * @example flatten_all
     *
     * @var string
     */
    public $flattenMode;

    /**
     * @example 1
     *
     * @var string
     */
    public $sequence;
    protected $_name = [
        'configId'    => 'ConfigId',
        'flattenMode' => 'FlattenMode',
        'sequence'    => 'Sequence',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->flattenMode) {
            $res['FlattenMode'] = $this->flattenMode;
        }
        if (null !== $this->sequence) {
            $res['Sequence'] = $this->sequence;
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
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['FlattenMode'])) {
            $model->flattenMode = $map['FlattenMode'];
        }
        if (isset($map['Sequence'])) {
            $model->sequence = $map['Sequence'];
        }

        return $model;
    }
}
