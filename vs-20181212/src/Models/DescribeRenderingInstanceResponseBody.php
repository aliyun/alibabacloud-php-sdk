<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingInstanceResponseBody\configInfo;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingInstanceResponseBody\portMappings;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingInstanceResponseBody\renderingStatus;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingInstanceResponseBody\systemInfo;
use AlibabaCloud\Tea\Model;

class DescribeRenderingInstanceResponseBody extends Model
{
    /**
     * @var configInfo
     */
    public $configInfo;

    /**
     * @example 2024-05-07T02:27:06Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example cn-xxx.ecr.aliyuncs.com
     *
     * @var string
     */
    public $hostname;

    /**
     * @var portMappings[]
     */
    public $portMappings;

    /**
     * @example render-9f8c57355d224ad7beaf95e145f22111
     *
     * @var string
     */
    public $renderingInstanceId;

    /**
     * @var renderingStatus
     */
    public $renderingStatus;

    /**
     * @example BEA5625F-8FCF-48F4-851B-CA63946DA664
     *
     * @var string
     */
    public $requestId;

    /**
     * @var systemInfo
     */
    public $systemInfo;
    protected $_name = [
        'configInfo'          => 'ConfigInfo',
        'creationTime'        => 'CreationTime',
        'hostname'            => 'Hostname',
        'portMappings'        => 'PortMappings',
        'renderingInstanceId' => 'RenderingInstanceId',
        'renderingStatus'     => 'RenderingStatus',
        'requestId'           => 'RequestId',
        'systemInfo'          => 'SystemInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configInfo) {
            $res['ConfigInfo'] = null !== $this->configInfo ? $this->configInfo->toMap() : null;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }
        if (null !== $this->portMappings) {
            $res['PortMappings'] = [];
            if (null !== $this->portMappings && \is_array($this->portMappings)) {
                $n = 0;
                foreach ($this->portMappings as $item) {
                    $res['PortMappings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->renderingInstanceId) {
            $res['RenderingInstanceId'] = $this->renderingInstanceId;
        }
        if (null !== $this->renderingStatus) {
            $res['RenderingStatus'] = null !== $this->renderingStatus ? $this->renderingStatus->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->systemInfo) {
            $res['SystemInfo'] = null !== $this->systemInfo ? $this->systemInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRenderingInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigInfo'])) {
            $model->configInfo = configInfo::fromMap($map['ConfigInfo']);
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }
        if (isset($map['PortMappings'])) {
            if (!empty($map['PortMappings'])) {
                $model->portMappings = [];
                $n                   = 0;
                foreach ($map['PortMappings'] as $item) {
                    $model->portMappings[$n++] = null !== $item ? portMappings::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RenderingInstanceId'])) {
            $model->renderingInstanceId = $map['RenderingInstanceId'];
        }
        if (isset($map['RenderingStatus'])) {
            $model->renderingStatus = renderingStatus::fromMap($map['RenderingStatus']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SystemInfo'])) {
            $model->systemInfo = systemInfo::fromMap($map['SystemInfo']);
        }

        return $model;
    }
}
