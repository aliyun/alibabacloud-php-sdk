<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeKernelVersionResponseBody\availableKernelVersions;
use AlibabaCloud\Tea\Model;

class DescribeKernelVersionResponseBody extends Model
{
    /**
     * @var availableKernelVersions[]
     */
    public $availableKernelVersions;

    /**
     * @example 2025-01-12T16:00:00Z
     *
     * @var string
     */
    public $expireDate;

    /**
     * @example 3.1.8
     *
     * @var string
     */
    public $kernelVersion;

    /**
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
