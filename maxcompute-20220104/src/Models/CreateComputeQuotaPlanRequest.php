<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\CreateComputeQuotaPlanRequest\quota;
use AlibabaCloud\Tea\Model;

class CreateComputeQuotaPlanRequest extends Model
{
    /**
     * @description The name of quota plan.
     *
     * This parameter is required.
     *
     * @example planA
     *
     * @var string
     */
    public $name;

    /**
     * @description The parameters of quota plan.
     *
     * @var quota
     */
    public $quota;
    protected $_name = [
        'name' => 'name',
        'quota' => 'quota',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->quota) {
            $res['quota'] = null !== $this->quota ? $this->quota->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateComputeQuotaPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['quota'])) {
            $model->quota = quota::fromMap($map['quota']);
        }

        return $model;
    }
}
