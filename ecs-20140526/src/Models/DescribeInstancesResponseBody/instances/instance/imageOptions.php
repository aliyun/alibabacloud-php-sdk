<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance;

use AlibabaCloud\Tea\Model;

class imageOptions extends Model
{
    /**
     * @description Indicates whether the operating system supports access to disks over the NVMe protocol. Valid values:
     *
     *   true
     *   false
     *
     * >  This parameter is returned only if you specify CURRENT_OS_NVME_SUPPORTED in AdditionalAttributes in the request.
     *
     * @example true
     *
     * @var bool
     */
    public $currentOSNVMeSupported;

    /**
     * @description Indicates whether the instance that uses the image supports logons of the ecs-user user. Valid values:
     *
     *   true
     *   false
     *
     * @example false
     *
     * @var bool
     */
    public $loginAsNonRoot;
    protected $_name = [
        'currentOSNVMeSupported' => 'CurrentOSNVMeSupported',
        'loginAsNonRoot' => 'LoginAsNonRoot',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentOSNVMeSupported) {
            $res['CurrentOSNVMeSupported'] = $this->currentOSNVMeSupported;
        }
        if (null !== $this->loginAsNonRoot) {
            $res['LoginAsNonRoot'] = $this->loginAsNonRoot;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentOSNVMeSupported'])) {
            $model->currentOSNVMeSupported = $map['CurrentOSNVMeSupported'];
        }
        if (isset($map['LoginAsNonRoot'])) {
            $model->loginAsNonRoot = $map['LoginAsNonRoot'];
        }

        return $model;
    }
}
