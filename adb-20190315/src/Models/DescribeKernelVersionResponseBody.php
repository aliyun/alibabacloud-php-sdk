<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeKernelVersionResponseBody\availableKernelVersions;
use AlibabaCloud\Tea\Model;

class DescribeKernelVersionResponseBody extends Model
{
    /**
     * @description The minor versions to which you can update the current minor version of the cluster.
     *
     * @var availableKernelVersions[]
     */
    public $availableKernelVersions;

    /**
     * @description The maintenance expiration time of the version. The time follows the ISO 8601 standard in the yyyy-MM-DD HH:mm:ss format. The time is displayed in UTC. After the time arrives, the system no longer maintains the version. If any issues occur, update the minor version of the cluster to a later version.
     *
     * @example 2023-06-01T10:36:30Z
     *
     * @var string
     */
    public $expireDate;

    /**
     * @description The minor version of the cluster. Example: **3.1.8**.
     *
     * @example 3.1.8
     *
     * @var string
     */
    public $kernelVersion;

    /**
     * @description The request ID.
     *
     * @example 1AD222E9-E606-4A42-BF6D-8A4442913CEF
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'availableKernelVersions' => 'AvailableKernelVersions',
        'expireDate'              => 'ExpireDate',
        'kernelVersion'           => 'KernelVersion',
        'requestId'               => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableKernelVersions) {
            $res['AvailableKernelVersions'] = [];
            if (null !== $this->availableKernelVersions && \is_array($this->availableKernelVersions)) {
                $n = 0;
                foreach ($this->availableKernelVersions as $item) {
                    $res['AvailableKernelVersions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->expireDate) {
            $res['ExpireDate'] = $this->expireDate;
        }
        if (null !== $this->kernelVersion) {
            $res['KernelVersion'] = $this->kernelVersion;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeKernelVersionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableKernelVersions'])) {
            if (!empty($map['AvailableKernelVersions'])) {
                $model->availableKernelVersions = [];
                $n                              = 0;
                foreach ($map['AvailableKernelVersions'] as $item) {
                    $model->availableKernelVersions[$n++] = null !== $item ? availableKernelVersions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ExpireDate'])) {
            $model->expireDate = $map['ExpireDate'];
        }
        if (isset($map['KernelVersion'])) {
            $model->kernelVersion = $map['KernelVersion'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
