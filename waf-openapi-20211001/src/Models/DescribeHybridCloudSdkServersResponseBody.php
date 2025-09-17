<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeHybridCloudSdkServersResponseBody\sdkServers;

class DescribeHybridCloudSdkServersResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sdkServers[]
     */
    public $sdkServers;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId' => 'RequestId',
        'sdkServers' => 'SdkServers',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->sdkServers)) {
            Model::validateArray($this->sdkServers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sdkServers) {
            if (\is_array($this->sdkServers)) {
                $res['SdkServers'] = [];
                $n1 = 0;
                foreach ($this->sdkServers as $item1) {
                    $res['SdkServers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SdkServers'])) {
            if (!empty($map['SdkServers'])) {
                $model->sdkServers = [];
                $n1 = 0;
                foreach ($map['SdkServers'] as $item1) {
                    $model->sdkServers[$n1] = sdkServers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
