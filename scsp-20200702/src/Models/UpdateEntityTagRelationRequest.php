<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scsp\V20200702\Models;

use AlibabaCloud\Tea\Model;

class UpdateEntityTagRelationRequest extends Model
{
    /**
     * @var string
     */
    public $entityTagParam;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'entityTagParam' => 'EntityTagParam',
        'instanceId'     => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityTagParam) {
            $res['EntityTagParam'] = $this->entityTagParam;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateEntityTagRelationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityTagParam'])) {
            $model->entityTagParam = $map['EntityTagParam'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
