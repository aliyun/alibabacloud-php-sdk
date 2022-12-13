<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class GetServiceGroupPersonSchedulingRequest extends Model
{
    /**
     * @example C4BE3837-1A13-413B-A225-2C88188E8A43
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example 2020-09-31 00:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 77777
     *
     * @var int
     */
    public $serviceGroupId;

    /**
     * @example 2020-09-01 00:00:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @example 66666
     *
     * @var int
     */
    public $userId;
    protected $_name = [
        'clientToken'    => 'clientToken',
        'endTime'        => 'endTime',
        'serviceGroupId' => 'serviceGroupId',
        'startTime'      => 'startTime',
        'userId'         => 'userId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->serviceGroupId) {
            $res['serviceGroupId'] = $this->serviceGroupId;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetServiceGroupPersonSchedulingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['serviceGroupId'])) {
            $model->serviceGroupId = $map['serviceGroupId'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
