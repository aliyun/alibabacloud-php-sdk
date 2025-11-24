<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Dara\Model;

class UpdateGuestClusterConfigRequest extends Model
{
    /**
     * @var string
     */
    public $guestClusterId;

    /**
     * @var bool
     */
    public $SMCEnabled;

    /**
     * @var string
     */
    public $serviceMeshId;
    protected $_name = [
        'guestClusterId' => 'GuestClusterId',
        'SMCEnabled' => 'SMCEnabled',
        'serviceMeshId' => 'ServiceMeshId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->guestClusterId) {
            $res['GuestClusterId'] = $this->guestClusterId;
        }

        if (null !== $this->SMCEnabled) {
            $res['SMCEnabled'] = $this->SMCEnabled;
        }

        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
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
        if (isset($map['GuestClusterId'])) {
            $model->guestClusterId = $map['GuestClusterId'];
        }

        if (isset($map['SMCEnabled'])) {
            $model->SMCEnabled = $map['SMCEnabled'];
        }

        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }

        return $model;
    }
}
