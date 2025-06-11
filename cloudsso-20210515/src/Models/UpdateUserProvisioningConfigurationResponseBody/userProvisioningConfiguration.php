<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\UpdateUserProvisioningConfigurationResponseBody;

use AlibabaCloud\Dara\Model;

class userProvisioningConfiguration extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $defaultLandingPage;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var int
     */
    public $sessionDuration;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'defaultLandingPage' => 'DefaultLandingPage',
        'directoryId' => 'DirectoryId',
        'sessionDuration' => 'SessionDuration',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
