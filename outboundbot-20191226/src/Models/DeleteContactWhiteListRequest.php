<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class DeleteContactWhiteListRequest extends Model
{
    /**
     * @example 111111
     *
     * @var string
     */
    public $contactWhiteListId;

    /**
     * @example af81a389-91f0-4157-8d82-720edd02b66a
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
        'contactWhiteListId' => 'ContactWhiteListId',
        'instanceId'         => 'InstanceId',
        'operator'           => 'Operator',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactWhiteListId) {
            $res['ContactWhiteListId'] = $this->contactWhiteListId;
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
     * @return DeleteContactWhiteListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactWhiteListId'])) {
            $model->contactWhiteListId = $map['ContactWhiteListId'];
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
