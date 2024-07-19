<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class UpdateResourceInstanceRequest extends Model
{
    /**
     * @description The operation that updates the scheduling state of the instance in a dedicated resource group. Valid values:
     *
     *   Uncordon: allows scheduling the service to this instance.
     *   Cordon: prohibits scheduling the service to this instance.
     *   Drain: evicts the service that has been scheduled to this instance.
     *
     * This parameter is required.
     * @example Cordon
     *
     * @var string
     */
    public $action;
    protected $_name = [
        'action' => 'Action',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateResourceInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        return $model;
    }
}
