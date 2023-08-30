<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20190901\Models;

use AlibabaCloud\SDK\Dts\V20190901\Models\SwitchSynchronizationEndpointRequest\endpoint;
use AlibabaCloud\Tea\Model;

class SwitchSynchronizationEndpointRequest extends Model
{
    /**
     * @var endpoint
     */
    public $endpoint;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $synchronizationDirection;

    /**
     * @var string
     */
    public $synchronizationJobId;
    protected $_name = [
        'endpoint'                 => 'Endpoint',
        'ownerId'                  => 'OwnerId',
        'synchronizationDirection' => 'SynchronizationDirection',
        'synchronizationJobId'     => 'SynchronizationJobId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpoint) {
            $res['Endpoint'] = null !== $this->endpoint ? $this->endpoint->toMap() : null;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->synchronizationDirection) {
            $res['SynchronizationDirection'] = $this->synchronizationDirection;
        }
        if (null !== $this->synchronizationJobId) {
            $res['SynchronizationJobId'] = $this->synchronizationJobId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SwitchSynchronizationEndpointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Endpoint'])) {
            $model->endpoint = endpoint::fromMap($map['Endpoint']);
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['SynchronizationDirection'])) {
            $model->synchronizationDirection = $map['SynchronizationDirection'];
        }
        if (isset($map['SynchronizationJobId'])) {
            $model->synchronizationJobId = $map['SynchronizationJobId'];
        }

        return $model;
    }
}
