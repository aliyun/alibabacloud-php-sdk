<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class CreateLaunchTemplateResponseBody extends Model
{
    /**
     * @description The ID of the launch template.
     *
     * @example lt-m5eiaupmvm2op9d****
     *
     * @var string
     */
    public $launchTemplateId;

    /**
     * @description The version number of the launch template.
     *
     * @example 2
     *
     * @var int
     */
    public $launchTemplateVersionNumber;

    /**
     * @description The ID of the request.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'launchTemplateId'            => 'LaunchTemplateId',
        'launchTemplateVersionNumber' => 'LaunchTemplateVersionNumber',
        'requestId'                   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->launchTemplateId) {
            $res['LaunchTemplateId'] = $this->launchTemplateId;
        }
        if (null !== $this->launchTemplateVersionNumber) {
            $res['LaunchTemplateVersionNumber'] = $this->launchTemplateVersionNumber;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLaunchTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LaunchTemplateId'])) {
            $model->launchTemplateId = $map['LaunchTemplateId'];
        }
        if (isset($map['LaunchTemplateVersionNumber'])) {
            $model->launchTemplateVersionNumber = $map['LaunchTemplateVersionNumber'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
