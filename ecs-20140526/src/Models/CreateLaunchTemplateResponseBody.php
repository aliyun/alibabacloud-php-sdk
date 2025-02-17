<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;

class CreateLaunchTemplateResponseBody extends Model
{
    /**
     * @var string
     */
    public $launchTemplateId;
    /**
     * @var int
     */
    public $launchTemplateVersionNumber;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (isset($map['LaunchTemplateVersionNumber'])) {
            $model->launchTemplateVersionNumber = $map['LaunchTemplateVersionNumber'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
