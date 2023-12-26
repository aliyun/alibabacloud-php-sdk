<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\SDK\NAS\V20170626\Models\CreateMountTargetResponseBody\mountTargetExtra;
use AlibabaCloud\Tea\Model;

class CreateMountTargetResponseBody extends Model
{
    /**
     * @description The IPv4 domain name of the mount target.
     *
     * @example 174494b666-x****.cn-hangzhou.nas.aliyuncs.com
     *
     * @var string
     */
    public $mountTargetDomain;

    /**
     * @description The information about the mount target.
     *
     * @var mountTargetExtra
     */
    public $mountTargetExtra;

    /**
     * @description The request ID.
     *
     * @example 70EACC9C-D07A-4A34-ADA4-77506C42****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mountTargetDomain' => 'MountTargetDomain',
        'mountTargetExtra'  => 'MountTargetExtra',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mountTargetDomain) {
            $res['MountTargetDomain'] = $this->mountTargetDomain;
        }
        if (null !== $this->mountTargetExtra) {
            $res['MountTargetExtra'] = null !== $this->mountTargetExtra ? $this->mountTargetExtra->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
