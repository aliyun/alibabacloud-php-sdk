<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class UpdateUserProvisioningConfigurationRequest extends Model
{
    /**
     * @description The ID of the resource directory.
     *
     * @example d-003qew84****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The new default URL for a CloudSSO user who logs on to the Alibaba Cloud Management Console.
     *
     * Default value: https://homenew.console.aliyun.com.
     * @example https://home.console.aliyun.com/home/dashboard/ProductAndService
     *
     * @var string
     */
    public $newDefaultLandingPage;

    /**
     * @description The new duration of the logon session.
     *
     * Default value: 6.
     * @example 6
     *
     * @var int
     */
    public $newSessionDuration;
    protected $_name = [
        'directoryId'           => 'DirectoryId',
        'newDefaultLandingPage' => 'NewDefaultLandingPage',
        'newSessionDuration'    => 'NewSessionDuration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->newDefaultLandingPage) {
            $res['NewDefaultLandingPage'] = $this->newDefaultLandingPage;
        }
        if (null !== $this->newSessionDuration) {
            $res['NewSessionDuration'] = $this->newSessionDuration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateUserProvisioningConfigurationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['NewDefaultLandingPage'])) {
            $model->newDefaultLandingPage = $map['NewDefaultLandingPage'];
        }
        if (isset($map['NewSessionDuration'])) {
            $model->newSessionDuration = $map['NewSessionDuration'];
        }

        return $model;
    }
}
