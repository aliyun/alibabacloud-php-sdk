<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20190601\Models\DeleteInstanceRequest;

use AlibabaCloud\Tea\Model;

class deleteInstanceRequest extends Model
{
    /**
     * @example 223493C7-FCA9-13D4-B75B-AF8B32F4****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $region;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'region'     => 'Region',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deleteInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}
