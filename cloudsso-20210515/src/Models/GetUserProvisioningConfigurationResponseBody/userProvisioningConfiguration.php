<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetUserProvisioningConfigurationResponseBody;

use AlibabaCloud\Tea\Model;

class userProvisioningConfiguration extends Model
{
    /**
     * @description The creation time.
     *
     * @example 2022-11-28T03:55:42Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The default URL for a CloudSSO user who logs on to the Alibaba Cloud Management Console.
     *
     * Default value: https://homenew.console.aliyun.com.
     * @example https://homenew.console.aliyun.com
     *
     * @var string
     */
    public $defaultLandingPage;

    /**
     * @description The ID of the resource directory.
     *
     * @example d-00fc2p61****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The duration of the logon session.
     *
     * Default value: 6.
     * @example 10
     *
     * @var int
     */
    public $sessionDuration;

    /**
     * @description The modification time.
     *
     * @example 2022-11-28T03:55:42Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'         => 'CreateTime',
        'defaultLandingPage' => 'DefaultLandingPage',
        'directoryId'        => 'DirectoryId',
        'sessionDuration'    => 'SessionDuration',
        'updateTime'         => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->defaultLandingPage) {
            $res['DefaultLandingPage'] = $this->defaultLandingPage;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->sessionDuration) {
            $res['SessionDuration'] = $this->sessionDuration;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userProvisioningConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DefaultLandingPage'])) {
            $model->defaultLandingPage = $map['DefaultLandingPage'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['SessionDuration'])) {
            $model->sessionDuration = $map['SessionDuration'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
