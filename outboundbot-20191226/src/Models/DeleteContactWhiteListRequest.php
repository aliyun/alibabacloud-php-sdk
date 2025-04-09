<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;

class DeleteContactWhiteListRequest extends Model
{
    /**
     * @var string
     */
    public $contactWhiteListId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $operator;
    protected $_name = [
        'contactWhiteListId' => 'ContactWhiteListId',
        'instanceId' => 'InstanceId',
        'operator' => 'Operator',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
