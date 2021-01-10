<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class CreateSchemaSubscribeRequest extends Model
{
    /**
     * @var string
     */
    public $deviceModel;

    /**
     * @var string
     */
    public $subscribeList;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $schemaVersion;
    protected $_name = [
        'deviceModel'   => 'DeviceModel',
        'subscribeList' => 'SubscribeList',
        'projectId'     => 'ProjectId',
        'schemaVersion' => 'SchemaVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceModel) {
            $res['DeviceModel'] = $this->deviceModel;
        }
        if (null !== $this->subscribeList) {
            $res['SubscribeList'] = $this->subscribeList;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->schemaVersion) {
            $res['SchemaVersion'] = $this->schemaVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSchemaSubscribeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceModel'])) {
            $model->deviceModel = $map['DeviceModel'];
        }
        if (isset($map['SubscribeList'])) {
            $model->subscribeList = $map['SubscribeList'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['SchemaVersion'])) {
            $model->schemaVersion = $map['SchemaVersion'];
        }

        return $model;
    }
}
