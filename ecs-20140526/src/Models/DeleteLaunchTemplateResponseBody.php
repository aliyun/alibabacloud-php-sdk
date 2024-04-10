<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteLaunchTemplateResponseBody\launchTemplateVersionNumbers;
use AlibabaCloud\Tea\Model;

class DeleteLaunchTemplateResponseBody extends Model
{
    /**
     * @description The ID of the launch template. For more information, see [DescribeLaunchTemplates](~~73759~~).
     *
     * You must specify `LaunchTemplateId` or `LaunchTemplateName` to specify a launch template.
     * @example lt-bp1apo0bbbkuy0rj****
     *
     * @var string
     */
    public $launchTemplateId;

    /**
     * @description The versions of the deleted launch template.
     *
     * @var launchTemplateVersionNumbers
     */
    public $launchTemplateVersionNumbers;

    /**
     * @description The request ID.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'launchTemplateId'             => 'LaunchTemplateId',
        'launchTemplateVersionNumbers' => 'LaunchTemplateVersionNumbers',
        'requestId'                    => 'RequestId',
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
        if (null !== $this->launchTemplateVersionNumbers) {
            $res['LaunchTemplateVersionNumbers'] = null !== $this->launchTemplateVersionNumbers ? $this->launchTemplateVersionNumbers->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteLaunchTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LaunchTemplateId'])) {
            $model->launchTemplateId = $map['LaunchTemplateId'];
        }
        if (isset($map['LaunchTemplateVersionNumbers'])) {
            $model->launchTemplateVersionNumbers = launchTemplateVersionNumbers::fromMap($map['LaunchTemplateVersionNumbers']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
