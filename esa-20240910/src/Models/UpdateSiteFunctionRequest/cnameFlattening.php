<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\UpdateSiteFunctionRequest;

use AlibabaCloud\Tea\Model;

class cnameFlattening extends Model
{
    /**
     * @var int
     */
    public $configId;

    /**
     * @var string
     */
    public $flattenMode;
    protected $_name = [
        'configId'    => 'ConfigId',
        'flattenMode' => 'FlattenMode',
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

        return $model;
    }
}
