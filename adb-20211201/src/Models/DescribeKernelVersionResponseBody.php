<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeKernelVersionResponseBody\availableKernelVersions;

class DescribeKernelVersionResponseBody extends Model
{
    /**
     * @var availableKernelVersions[]
     */
    public $availableKernelVersions;
    /**
     * @var string
     */
    public $expireDate;
    /**
     * @var string
     */
    public $kernelVersion;
    /**
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
        if (\is_array($this->availableKernelVersions)) {
            Model::validateArray($this->availableKernelVersions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableKernelVersions) {
            if (\is_array($this->availableKernelVersions)) {
                $res['AvailableKernelVersions'] = [];
                $n1                             = 0;
                foreach ($this->availableKernelVersions as $item1) {
                    $res['AvailableKernelVersions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableKernelVersions'])) {
            if (!empty($map['AvailableKernelVersions'])) {
                $model->availableKernelVersions = [];
                $n1                             = 0;
                foreach ($map['AvailableKernelVersions'] as $item1) {
                    $model->availableKernelVersions[$n1++] = availableKernelVersions::fromMap($item1);
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
