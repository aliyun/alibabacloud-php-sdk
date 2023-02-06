<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class CreateLaunchTemplateVersionResponseBody extends Model
{
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
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DExxxxx
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'launchTemplateVersionNumber' => 'LaunchTemplateVersionNumber',
        'requestId'                   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return CreateLaunchTemplateVersionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LaunchTemplateVersionNumber'])) {
            $model->launchTemplateVersionNumber = $map['LaunchTemplateVersionNumber'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
