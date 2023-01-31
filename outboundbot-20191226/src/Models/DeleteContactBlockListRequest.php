<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class DeleteContactBlockListRequest extends Model
{
    /**
     * @example c6320d3c-fa45-4011-b3b1-acdfabe3a8c6
     *
     * @var string
     */
    public $contactBlockListId;

    /**
     * @example c6320d3c-fa45-4011-b3b1-acdfabe3a8c6
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 160131
     *
     * @var string
     */
    public $operator;
    protected $_name = [
        'contactBlockListId' => 'ContactBlockListId',
        'instanceId'         => 'InstanceId',
        'operator'           => 'Operator',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactBlockListId) {
            $res['ContactBlockListId'] = $this->contactBlockListId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteContactBlockListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactBlockListId'])) {
            $model->contactBlockListId = $map['ContactBlockListId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }

        return $model;
    }
}
