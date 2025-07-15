<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListLiveMessageAppsResponseBody;

use AlibabaCloud\Tea\Model;

class appList extends Model
{
    /**
     * @description The ID of the interactive messaging application queried.
     *
     * @example demo
     *
     * @var string
     */
    public $appId;

    /**
     * @description The AppKey of the interactive messaging application. It is used to authorize operations related to the application ID.
     *
     * @example **********************************
     *
     * @var string
     */
    public $appKey;

    /**
     * @description The name of the application.
     *
     * @example testApp
     *
     * @var string
     */
    public $appName;

    /**
     * @description The signature of the interactive messaging application. It is required by the interactive messaging SDK.
     *
     * @example **************************************************************************
     *
     * @var string
     */
    public $appSign;

    /**
     * @description The time when the application was created. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1698305471
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The live center.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $dataCenter;

    /**
     * @description Indicates whether the interactive messaging application is disabled.
     *
     * @example false
     *
     * @var string
     */
    public $disable;

    /**
     * @description The time when the application was last modified. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1698305471
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @description The retention period of group messages in the application. Valid values:
     *
     *   0 (default): 30 days
     *   1: 90 days
     *   2: 180 days
     *
     * @example 1
     *
     * @var int
     */
    public $msgLifeCycle;
    protected $_name = [
        'appId' => 'AppId',
        'appKey' => 'AppKey',
        'appName' => 'AppName',
        'appSign' => 'AppSign',
        'createTime' => 'CreateTime',
        'dataCenter' => 'DataCenter',
        'disable' => 'Disable',
        'modifyTime' => 'ModifyTime',
        'msgLifeCycle' => 'MsgLifeCycle',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appSign) {
            $res['AppSign'] = $this->appSign;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dataCenter) {
            $res['DataCenter'] = $this->dataCenter;
        }
        if (null !== $this->disable) {
            $res['Disable'] = $this->disable;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->msgLifeCycle) {
            $res['MsgLifeCycle'] = $this->msgLifeCycle;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppSign'])) {
            $model->appSign = $map['AppSign'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DataCenter'])) {
            $model->dataCenter = $map['DataCenter'];
        }
        if (isset($map['Disable'])) {
            $model->disable = $map['Disable'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['MsgLifeCycle'])) {
            $model->msgLifeCycle = $map['MsgLifeCycle'];
        }

        return $model;
    }
}
