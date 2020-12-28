<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class CreateLaunchTemplateVersionResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $launchTemplateVersionNumber;
    protected $_name = [
        'requestId'                   => 'RequestId',
        'launchTemplateVersionNumber' => 'LaunchTemplateVersionNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->launchTemplateVersionNumber) {
            $res['LaunchTemplateVersionNumber'] = $this->launchTemplateVersionNumber;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LaunchTemplateVersionNumber'])) {
            $model->launchTemplateVersionNumber = $map['LaunchTemplateVersionNumber'];
        }

        return $model;
    }
}
