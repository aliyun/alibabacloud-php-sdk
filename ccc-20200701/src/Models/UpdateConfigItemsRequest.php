<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class UpdateConfigItemsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example [{"name":"ShowCalledID","value":"-1"},{"name":"ShowCalleeID","value":"1"},{"name":"AllowHangup","value":"0"},{"name":"AutoAnswerCall","value":"-1"},{"name":"AllowAudioDownload","value":"1"},{"name":"AllowChooseSignedSkillGroup","value":"1"}]
     *
     * @var string
     */
    public $configItems;

    /**
     * @description This parameter is required.
     *
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description This parameter is required.
     *
     * @example ccc-test
     *
     * @var string
     */
    public $objectId;

    /**
     * @description This parameter is required.
     *
     * @example INSTANCE
     *
     * @var string
     */
    public $objectType;
    protected $_name = [
        'configItems' => 'ConfigItems',
        'instanceId'  => 'InstanceId',
        'objectId'    => 'ObjectId',
        'objectType'  => 'ObjectType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configItems) {
            $res['ConfigItems'] = $this->configItems;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->objectId) {
            $res['ObjectId'] = $this->objectId;
        }
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateConfigItemsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigItems'])) {
            $model->configItems = $map['ConfigItems'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ObjectId'])) {
            $model->objectId = $map['ObjectId'];
        }
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }

        return $model;
    }
}
