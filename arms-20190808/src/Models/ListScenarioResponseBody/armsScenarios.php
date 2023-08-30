<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListScenarioResponseBody;

use AlibabaCloud\Tea\Model;

class armsScenarios extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example b590lhguqs@28f515462******
     *
     * @var string
     */
    public $appId;

    /**
     * @description The time when the business monitoring job was created.
     *
     * @example 1585214916000
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The extended information. The value is a JSON string.
     *
     * @example {"_MODE": "CUSTOM-TRANSACTION","_SCENARIO": "USER-DEFINED"}
     *
     * @var string
     */
    public $extensions;

    /**
     * @description The ID of the business monitoring job.
     *
     * @example 132
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the business monitoring job.
     *
     * @example k8s_deployment_css-guns-vip-main-prod_silence
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the region.
     *
     * @example cn-zhangjiakou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The code of the business monitoring job.
     *
     * @example a9f8****
     *
     * @var string
     */
    public $sign;

    /**
     * @description The time when the business monitoring job was updated.
     *
     * @example 1585214916000
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description The ID of the user.
     *
     * @example 113197164949****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'appId'      => 'AppId',
        'createTime' => 'CreateTime',
        'extensions' => 'Extensions',
        'id'         => 'Id',
        'name'       => 'Name',
        'regionId'   => 'RegionId',
        'sign'       => 'Sign',
        'updateTime' => 'UpdateTime',
        'userId'     => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->extensions) {
            $res['Extensions'] = $this->extensions;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sign) {
            $res['Sign'] = $this->sign;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return armsScenarios
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Extensions'])) {
            $model->extensions = $map['Extensions'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Sign'])) {
            $model->sign = $map['Sign'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
