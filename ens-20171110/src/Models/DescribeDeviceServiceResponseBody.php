<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDeviceServiceResponseBody\appMetaData;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDeviceServiceResponseBody\appStatus;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDeviceServiceResponseBody\resourceDetailInfos;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDeviceServiceResponseBody\resourceInfos;

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
        'appMetaData' => 'AppMetaData',
        'appStatus' => 'AppStatus',
        'requestId' => 'RequestId',
        'resourceDetailInfos' => 'ResourceDetailInfos',
        'resourceInfos' => 'ResourceInfos',
    ];

    public function validate()
    {
        if (null !== $this->appMetaData) {
            $this->appMetaData->validate();
        }
        if (null !== $this->appStatus) {
            $this->appStatus->validate();
        }
        if (\is_array($this->resourceDetailInfos)) {
            Model::validateArray($this->resourceDetailInfos);
        }
        if (\is_array($this->resourceInfos)) {
            Model::validateArray($this->resourceInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appMetaData) {
            $res['AppMetaData'] = null !== $this->appMetaData ? $this->appMetaData->toArray($noStream) : $this->appMetaData;
        }

        if (null !== $this->appStatus) {
            $res['AppStatus'] = null !== $this->appStatus ? $this->appStatus->toArray($noStream) : $this->appStatus;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceDetailInfos) {
            if (\is_array($this->resourceDetailInfos)) {
                $res['ResourceDetailInfos'] = [];
                $n1 = 0;
                foreach ($this->resourceDetailInfos as $item1) {
                    $res['ResourceDetailInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceInfos) {
            if (\is_array($this->resourceInfos)) {
                $res['ResourceInfos'] = [];
                $n1 = 0;
                foreach ($this->resourceInfos as $item1) {
                    $res['ResourceInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
                $n1 = 0;
                foreach ($map['ResourceDetailInfos'] as $item1) {
                    $model->resourceDetailInfos[$n1] = resourceDetailInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ResourceInfos'])) {
            if (!empty($map['ResourceInfos'])) {
                $model->resourceInfos = [];
                $n1 = 0;
                foreach ($map['ResourceInfos'] as $item1) {
                    $model->resourceInfos[$n1] = resourceInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
