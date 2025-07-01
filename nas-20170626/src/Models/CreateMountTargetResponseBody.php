<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateMountTargetResponseBody\mountTargetExtra;

class CreateMountTargetResponseBody extends Model
{
    /**
     * @var string
     */
    public $mountTargetDomain;

    /**
     * @var mountTargetExtra
     */
    public $mountTargetExtra;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mountTargetDomain' => 'MountTargetDomain',
        'mountTargetExtra' => 'MountTargetExtra',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->mountTargetExtra) {
            $this->mountTargetExtra->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mountTargetDomain) {
            $res['MountTargetDomain'] = $this->mountTargetDomain;
        }

        if (null !== $this->mountTargetExtra) {
            $res['MountTargetExtra'] = null !== $this->mountTargetExtra ? $this->mountTargetExtra->toArray($noStream) : $this->mountTargetExtra;
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
        if (isset($map['MountTargetDomain'])) {
            $model->mountTargetDomain = $map['MountTargetDomain'];
        }

        if (isset($map['MountTargetExtra'])) {
            $model->mountTargetExtra = mountTargetExtra::fromMap($map['MountTargetExtra']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
