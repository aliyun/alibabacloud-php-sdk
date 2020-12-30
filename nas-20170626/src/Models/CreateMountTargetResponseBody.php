<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\SDK\NAS\V20170626\Models\CreateMountTargetResponseBody\mountTargetExtra;
use AlibabaCloud\Tea\Model;

class CreateMountTargetResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $mountTargetDomain;

    /**
     * @var mountTargetExtra
     */
    public $mountTargetExtra;
    protected $_name = [
        'requestId'         => 'RequestId',
        'mountTargetDomain' => 'MountTargetDomain',
        'mountTargetExtra'  => 'MountTargetExtra',
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
        if (null !== $this->mountTargetDomain) {
            $res['MountTargetDomain'] = $this->mountTargetDomain;
        }
        if (null !== $this->mountTargetExtra) {
            $res['MountTargetExtra'] = null !== $this->mountTargetExtra ? $this->mountTargetExtra->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMountTargetResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MountTargetDomain'])) {
            $model->mountTargetDomain = $map['MountTargetDomain'];
        }
        if (isset($map['MountTargetExtra'])) {
            $model->mountTargetExtra = mountTargetExtra::fromMap($map['MountTargetExtra']);
        }

        return $model;
    }
}
