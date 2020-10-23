<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models;

use AlibabaCloud\Tea\Model;

class PutConfigurationRecorderRequest extends Model
{
    /**
     * @var string
     */
    public $resourceTypes;
    protected $_name = [
        'resourceTypes' => 'ResourceTypes',
    ];

    public function validate()
    {
        Model::validateRequired('resourceTypes', $this->resourceTypes, true);
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
     * @return PutConfigurationRecorderRequest
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
