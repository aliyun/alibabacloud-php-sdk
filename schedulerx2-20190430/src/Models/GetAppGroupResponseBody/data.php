<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetAppGroupResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The AppKey of the application.
     *
     * @example QI4lWMZ+xk1rNB67jFUhaw==
     *
     * @var string
     */
    public $appKey;

    /**
     * @description The name of the application.
     *
     * @example DocTest
     *
     * @var string
     */
    public $appName;

    /**
     * @description The application version. 1: Basic version, 2: Professional version.
     *
     * @example 2
     *
     * @var string
     */
    public $appVersion;

    /**
     * @description The number of jobs that are configured for the application group.
     *
     * @example 1
     *
     * @var int
     */
    public $curJobs;

    /**
     * @description The description of the application.
     *
     * @example Test
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the application.
     *
     * @example testSchedulerx.defaultGroup
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The maximum number of jobs that can be configured for the application group.
     *
     * @example 1000
     *
     * @var int
     */
    public $maxJobs;

    /**
     * @description The configuration of the alert. The value is a JSON string. For more information, see **the additional information about response parameters below this table.**
     *
     * @example {"sendChannel":"sms,mail,ding"}
     *
     * @var string
     */
    public $monitorConfigJson;
    protected $_name = [
        'appKey'            => 'AppKey',
        'appName'           => 'AppName',
        'appVersion'        => 'AppVersion',
        'curJobs'           => 'CurJobs',
        'description'       => 'Description',
        'groupId'           => 'GroupId',
        'maxJobs'           => 'MaxJobs',
        'monitorConfigJson' => 'MonitorConfigJson',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->curJobs) {
            $res['CurJobs'] = $this->curJobs;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->maxJobs) {
            $res['MaxJobs'] = $this->maxJobs;
        }
        if (null !== $this->monitorConfigJson) {
            $res['MonitorConfigJson'] = $this->monitorConfigJson;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['CurJobs'])) {
            $model->curJobs = $map['CurJobs'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['MaxJobs'])) {
            $model->maxJobs = $map['MaxJobs'];
        }
        if (isset($map['MonitorConfigJson'])) {
            $model->monitorConfigJson = $map['MonitorConfigJson'];
        }

        return $model;
    }
}
