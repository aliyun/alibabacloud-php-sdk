<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class UpdateFunctionDefaultInstanceRequest extends Model
{
    /**
     * @description The name of the instance.
     *
     * @example "pop_test"
     *
     * @var string
     */
    public $instanceName;
    protected $_name = [
        'instanceName' => 'instanceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceName) {
            $res['instanceName'] = $this->instanceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateFunctionDefaultInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['instanceName'])) {
            $model->instanceName = $map['instanceName'];
        }

        return $model;
    }
}
