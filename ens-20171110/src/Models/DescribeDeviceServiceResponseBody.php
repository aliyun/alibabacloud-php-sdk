<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDeviceServiceResponseBody\appMetaData;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDeviceServiceResponseBody\appStatus;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDeviceServiceResponseBody\resourceDetailInfos;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDeviceServiceResponseBody\resourceInfos;
use AlibabaCloud\Tea\Model;

class DescribeDeviceServiceResponseBody extends Model
{
    /**
     * @var appMetaData
     */
    public $appMetaData;

    /**
     * @var appStatus
     */
    public $appStatus;

    /**
     * @description Id of the request
     *
     * @example 3A535110-3EE3-5EC5-B1ED-10B7067A1FC8
     *
     * @var string
     */
    public $requestId;

    /**
     * @var resourceDetailInfos[]
     */
    public $resourceDetailInfos;

    /**
     * @var resourceInfos[]
     */
    public $resourceInfos;
    protected $_name = [
        'appMetaData'         => 'AppMetaData',
        'appStatus'           => 'AppStatus',
        'requestId'           => 'RequestId',
        'resourceDetailInfos' => 'ResourceDetailInfos',
        'resourceInfos'       => 'ResourceInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appMetaData) {
            $res['AppMetaData'] = null !== $this->appMetaData ? $this->appMetaData->toMap() : null;
        }
        if (null !== $this->appStatus) {
            $res['AppStatus'] = null !== $this->appStatus ? $this->appStatus->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceDetailInfos) {
            $res['ResourceDetailInfos'] = [];
            if (null !== $this->resourceDetailInfos && \is_array($this->resourceDetailInfos)) {
                $n = 0;
                foreach ($this->resourceDetailInfos as $item) {
                    $res['ResourceDetailInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceInfos) {
            $res['ResourceInfos'] = [];
            if (null !== $this->resourceInfos && \is_array($this->resourceInfos)) {
                $n = 0;
                foreach ($this->resourceInfos as $item) {
                    $res['ResourceInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDeviceServiceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppMetaData'])) {
            $model->appMetaData = appMetaData::fromMap($map['AppMetaData']);
        }
        if (isset($map['AppStatus'])) {
            $model->appStatus = appStatus::fromMap($map['AppStatus']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceDetailInfos'])) {
            if (!empty($map['ResourceDetailInfos'])) {
                $model->resourceDetailInfos = [];
                $n                          = 0;
                foreach ($map['ResourceDetailInfos'] as $item) {
                    $model->resourceDetailInfos[$n++] = null !== $item ? resourceDetailInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResourceInfos'])) {
            if (!empty($map['ResourceInfos'])) {
                $model->resourceInfos = [];
                $n                    = 0;
                foreach ($map['ResourceInfos'] as $item) {
                    $model->resourceInfos[$n++] = null !== $item ? resourceInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
