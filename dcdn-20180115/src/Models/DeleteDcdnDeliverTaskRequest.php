<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DeleteDcdnDeliverTaskRequest extends Model
{
    /**
     * @var int
     */
    public $deliverId;

    /**
     * @var int
     */
    public $ownerId;
    protected $_name = [
        'deliverId' => 'DeliverId',
        'ownerId'   => 'OwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deliverId) {
            $res['DeliverId'] = $this->deliverId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDcdnDeliverTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeliverId'])) {
            $model->deliverId = $map['DeliverId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        return $model;
    }
}
