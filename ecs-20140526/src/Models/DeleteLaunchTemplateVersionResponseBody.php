<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteLaunchTemplateVersionResponseBody\launchTemplateVersions;
use AlibabaCloud\Tea\Model;

class DeleteLaunchTemplateVersionResponseBody extends Model
{
    /**
     * @description The versions of the launch template.
     *
     * @var launchTemplateVersions
     */
    public $launchTemplateVersions;

    /**
     * @description The request ID.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'launchTemplateVersions' => 'LaunchTemplateVersions',
        'requestId'              => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->launchTemplateVersions) {
            $res['LaunchTemplateVersions'] = null !== $this->launchTemplateVersions ? $this->launchTemplateVersions->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteLaunchTemplateVersionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LaunchTemplateVersions'])) {
            $model->launchTemplateVersions = launchTemplateVersions::fromMap($map['LaunchTemplateVersions']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
