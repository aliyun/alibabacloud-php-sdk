<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class UpdateConfigurationRecorderRequest extends Model
{
    /**
     * @example ACS::ECS::Instance
     *
     * @var string
     */
    public $resourceTypes;
    protected $_name = [
        'resourceTypes' => 'ResourceTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceTypes) {
            $res['ResourceTypes'] = $this->resourceTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateConfigurationRecorderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceTypes'])) {
            $model->resourceTypes = $map['ResourceTypes'];
        }

        return $model;
    }
}
