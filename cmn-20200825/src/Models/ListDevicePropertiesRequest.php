<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class ListDevicePropertiesRequest extends Model
{
    /**
     * @example form-u4ilnhu64h026lrf
     *
     * @var string
     */
    public $deviceFormId;

    /**
     * @description 实例ID
     *
     * @example cmn-cn-xxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 1
     *
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'deviceFormId' => 'DeviceFormId',
        'instanceId'   => 'InstanceId',
        'maxResults'   => 'MaxResults',
        'nextToken'    => 'NextToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceFormId) {
            $res['DeviceFormId'] = $this->deviceFormId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDevicePropertiesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceFormId'])) {
            $model->deviceFormId = $map['DeviceFormId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
