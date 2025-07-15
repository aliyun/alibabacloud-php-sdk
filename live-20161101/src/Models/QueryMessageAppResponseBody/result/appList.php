<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\QueryMessageAppResponseBody\result;

use AlibabaCloud\Tea\Model;

class appList extends Model
{
    /**
     * @description The configurations of the application.
     *
     * @var string[]
     */
    public $appConfig;

    /**
     * @description The ID of the interactive messaging application.
     *
     * @example VKL3***
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the interactive messaging application.
     *
     * @example test
     *
     * @var string
     */
    public $appName;

    /**
     * @description The time when the interactive messaging application was created. The time is displayed in UTC.
     *
     * @example 502280113
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The extended field.
     *
     * @var string[]
     */
    public $extension;

    /**
     * @description The status of the interactive message application. A value of **1** indicates that the application is normal.
     *
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'appConfig' => 'AppConfig',
        'appId' => 'AppId',
        'appName' => 'AppName',
        'createTime' => 'CreateTime',
        'extension' => 'Extension',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appConfig) {
            $res['AppConfig'] = $this->appConfig;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AppConfig'])) {
            $model->appConfig = $map['AppConfig'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
