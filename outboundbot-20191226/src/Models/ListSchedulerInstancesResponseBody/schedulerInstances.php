<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListSchedulerInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class schedulerInstances extends Model
{
    /**
     * @example {}
     *
     * @var string
     */
    public $baseStrategy;

    /**
     * @example CLOUD_CODE_PUBLISHER
     *
     * @var string
     */
    public $business;

    /**
     * @example 254EB995-DEDF-48A4-9101-9CA5B72FFBCC
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 5
     *
     * @var int
     */
    public $maxConcurrency;

    /**
     * @example 234852938
     *
     * @var string
     */
    public $ownerId;
    protected $_name = [
        'baseStrategy'   => 'BaseStrategy',
        'business'       => 'Business',
        'instanceId'     => 'InstanceId',
        'maxConcurrency' => 'MaxConcurrency',
        'ownerId'        => 'OwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseStrategy) {
            $res['BaseStrategy'] = $this->baseStrategy;
        }
        if (null !== $this->business) {
            $res['Business'] = $this->business;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->maxConcurrency) {
            $res['MaxConcurrency'] = $this->maxConcurrency;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return schedulerInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaseStrategy'])) {
            $model->baseStrategy = $map['BaseStrategy'];
        }
        if (isset($map['Business'])) {
            $model->business = $map['Business'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MaxConcurrency'])) {
            $model->maxConcurrency = $map['MaxConcurrency'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        return $model;
    }
}
