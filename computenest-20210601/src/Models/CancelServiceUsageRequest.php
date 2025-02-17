<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\Dara\Model;

class CancelServiceUsageRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var bool
     */
    public $needDelete;
    /**
     * @var string
     */
    public $serviceId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'needDelete'  => 'NeedDelete',
        'serviceId'   => 'ServiceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->needDelete) {
            $res['NeedDelete'] = $this->needDelete;
        }

        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['NeedDelete'])) {
            $model->needDelete = $map['NeedDelete'];
        }

        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        return $model;
    }
}
