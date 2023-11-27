<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateUserProvisioningConfigurationResponseBody;

use AlibabaCloud\Tea\Model;

class userProvisioningConfiguration extends Model
{
    /**
     * @example 2022-11-28T03:55:42Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example https://homenew.console.aliyun.com
     *
     * @var string
     */
    public $defaultLandingPage;

    /**
     * @example d-003qew84****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @example 6
     *
     * @var int
     */
    public $sessionDuration;

    /**
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
