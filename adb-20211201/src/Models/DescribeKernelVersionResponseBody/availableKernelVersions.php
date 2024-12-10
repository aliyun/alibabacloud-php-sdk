<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeKernelVersionResponseBody;

use AlibabaCloud\Tea\Model;

class availableKernelVersions extends Model
{
    /**
     * @example 2025-07-17T16:00:00Z
     *
     * @var string
     */
    public $expireDate;

    /**
     * @example 3.1.9
     *
     * @var string
     */
    public $kernelVersion;

    /**
     * @example 2024-07-17T16:00:00Z
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
