<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeKernelVersionResponseBody;

use AlibabaCloud\Tea\Model;

class availableKernelVersions extends Model
{
    /**
     * @description The maintenance expiration time of the version. The time follows the ISO 8601 standard in the yyyy-MM-DD HH:mm:ss format. The time is displayed in UTC. After the time arrives, the system no longer maintains the version. If any issues occur, update the minor version of the cluster to a later version.
     *
     * @example 2024-06-01T10:36:30Z
     *
     * @var string
     */
    public $expireDate;

    /**
     * @description The minor version. Example: **3.1.9**.
     *
     * @example 3.1.9
     *
     * @var string
     */
    public $kernelVersion;

    /**
     * @description The time when the minor version was released. The time follows the ISO 8601 standard in the yyyy-MM-DD HH:mm:ss format. The time is displayed in UTC.
     *
     * @example 2023-06-01T10:36:30Z
     *
     * @var string
     */
    public $releaseDate;
    protected $_name = [
        'expireDate'    => 'ExpireDate',
        'kernelVersion' => 'KernelVersion',
        'releaseDate'   => 'ReleaseDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expireDate) {
            $res['ExpireDate'] = $this->expireDate;
        }
        if (null !== $this->kernelVersion) {
            $res['KernelVersion'] = $this->kernelVersion;
        }
        if (null !== $this->releaseDate) {
            $res['ReleaseDate'] = $this->releaseDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableKernelVersions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpireDate'])) {
            $model->expireDate = $map['ExpireDate'];
        }
        if (isset($map['KernelVersion'])) {
            $model->kernelVersion = $map['KernelVersion'];
        }
        if (isset($map['ReleaseDate'])) {
            $model->releaseDate = $map['ReleaseDate'];
        }

        return $model;
    }
}
