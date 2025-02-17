<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DeleteLaunchTemplateResponseBody\launchTemplateVersionNumbers;

class DeleteLaunchTemplateResponseBody extends Model
{
    /**
     * @var string
     */
    public $launchTemplateId;
    /**
     * @var launchTemplateVersionNumbers
     */
    public $launchTemplateVersionNumbers;
    /**
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
        if (null !== $this->launchTemplateVersionNumbers) {
            $this->launchTemplateVersionNumbers->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->launchTemplateId) {
            $res['LaunchTemplateId'] = $this->launchTemplateId;
        }

        if (null !== $this->launchTemplateVersionNumbers) {
            $res['LaunchTemplateVersionNumbers'] = null !== $this->launchTemplateVersionNumbers ? $this->launchTemplateVersionNumbers->toArray($noStream) : $this->launchTemplateVersionNumbers;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
