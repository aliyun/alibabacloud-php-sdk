<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models;

use AlibabaCloud\Tea\Model;

class GetUserSpecialVersionGpuResourceInfoResponseBody extends Model
{
    /**
     * @var int
     */
    public $gpuAvailableQuota;

    /**
     * @var int
     */
    public $gpuTotalQuota;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var ResourceInfo[]
     */
    public $resources;
    protected $_name = [
        'gpuAvailableQuota' => 'GpuAvailableQuota',
        'gpuTotalQuota'     => 'GpuTotalQuota',
        'requestId'         => 'RequestId',
        'resources'         => 'Resources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gpuAvailableQuota) {
            $res['GpuAvailableQuota'] = $this->gpuAvailableQuota;
        }
        if (null !== $this->gpuTotalQuota) {
            $res['GpuTotalQuota'] = $this->gpuTotalQuota;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resources) {
            $res['Resources'] = [];
            if (null !== $this->resources && \is_array($this->resources)) {
                $n = 0;
                foreach ($this->resources as $item) {
                    $res['Resources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserSpecialVersionGpuResourceInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GpuAvailableQuota'])) {
            $model->gpuAvailableQuota = $map['GpuAvailableQuota'];
        }
        if (isset($map['GpuTotalQuota'])) {
            $model->gpuTotalQuota = $map['GpuTotalQuota'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Resources'])) {
            if (!empty($map['Resources'])) {
                $model->resources = [];
                $n                = 0;
                foreach ($map['Resources'] as $item) {
                    $model->resources[$n++] = null !== $item ? ResourceInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
