<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\CreateMountTargetResponseBody;

use AlibabaCloud\Tea\Model;

class mountTargetExtra extends Model
{
    /**
     * @description The dual-stack (IPv4 and IPv6) domain name of the mount target.
     *
     * @example 174494b666-x****.dualstack.cn-hangzhou.nas.aliyuncs.com
     *
     * @var string
     */
    public $dualStackMountTargetDomain;
    protected $_name = [
        'dualStackMountTargetDomain' => 'DualStackMountTargetDomain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dualStackMountTargetDomain) {
            $res['DualStackMountTargetDomain'] = $this->dualStackMountTargetDomain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mountTargetExtra
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DualStackMountTargetDomain'])) {
            $model->dualStackMountTargetDomain = $map['DualStackMountTargetDomain'];
        }

        return $model;
    }
}
