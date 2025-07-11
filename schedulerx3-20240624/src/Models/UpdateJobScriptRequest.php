<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models;

use AlibabaCloud\Tea\Model;

class UpdateJobScriptRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example test-app
     *
     * @var string
     */
    public $appName;

    /**
     * @description This parameter is required.
     *
     * @example xxljob-b6ec1xxxx
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description This parameter is required.
     *
     * @example 74
     *
     * @var int
     */
    public $jobId;

    /**
     * @var string
     */
    public $scriptContent;

    /**
     * @description This parameter is required.
     *
     * @example init version
     *
     * @var string
     */
    public $versionDescription;
    protected $_name = [
        'appName' => 'AppName',
        'clusterId' => 'ClusterId',
        'jobId' => 'JobId',
        'scriptContent' => 'ScriptContent',
        'versionDescription' => 'VersionDescription',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->scriptContent) {
            $res['ScriptContent'] = $this->scriptContent;
        }
        if (null !== $this->versionDescription) {
            $res['VersionDescription'] = $this->versionDescription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateJobScriptRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['ScriptContent'])) {
            $model->scriptContent = $map['ScriptContent'];
        }
        if (isset($map['VersionDescription'])) {
            $model->versionDescription = $map['VersionDescription'];
        }

        return $model;
    }
}
