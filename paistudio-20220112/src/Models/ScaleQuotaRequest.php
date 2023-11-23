<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class ScaleQuotaRequest extends Model
{
    /**
     * @var ResourceSpec
     */
    public $min;

    /**
     * @var string[]
     */
    public $resourceGroupIds;
    protected $_name = [
        'min'              => 'Min',
        'resourceGroupIds' => 'ResourceGroupIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->min) {
            $res['Min'] = null !== $this->min ? $this->min->toMap() : null;
        }
        if (null !== $this->resourceGroupIds) {
            $res['ResourceGroupIds'] = $this->resourceGroupIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScaleQuotaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Min'])) {
            $model->min = ResourceSpec::fromMap($map['Min']);
        }
        if (isset($map['ResourceGroupIds'])) {
            if (!empty($map['ResourceGroupIds'])) {
                $model->resourceGroupIds = $map['ResourceGroupIds'];
            }
        }

        return $model;
    }
}
