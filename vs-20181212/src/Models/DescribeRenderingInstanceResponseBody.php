<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingInstanceResponseBody\configInfo;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingInstanceResponseBody\portMappings;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingInstanceResponseBody\renderingStatus;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingInstanceResponseBody\systemInfo;

class DescribeRenderingInstanceResponseBody extends Model
{
    /**
     * @var configInfo
     */
    public $configInfo;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $egressIp;

    /**
     * @var string
     */
    public $hostname;

    /**
     * @var portMappings[]
     */
    public $portMappings;

    /**
     * @var string
     */
    public $renderingInstanceId;

    /**
     * @var string
     */
    public $renderingSpec;

    /**
     * @var renderingStatus
     */
    public $renderingStatus;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $storageSize;

    /**
     * @var systemInfo
     */
    public $systemInfo;
    protected $_name = [
        'configInfo' => 'ConfigInfo',
        'creationTime' => 'CreationTime',
        'egressIp' => 'EgressIp',
        'hostname' => 'Hostname',
        'portMappings' => 'PortMappings',
        'renderingInstanceId' => 'RenderingInstanceId',
        'renderingSpec' => 'RenderingSpec',
        'renderingStatus' => 'RenderingStatus',
        'requestId' => 'RequestId',
        'storageSize' => 'StorageSize',
        'systemInfo' => 'SystemInfo',
    ];

    public function validate()
    {
        if (null !== $this->configInfo) {
            $this->configInfo->validate();
        }
        if (\is_array($this->portMappings)) {
            Model::validateArray($this->portMappings);
        }
        if (null !== $this->renderingStatus) {
            $this->renderingStatus->validate();
        }
        if (null !== $this->systemInfo) {
            $this->systemInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configInfo) {
            $res['ConfigInfo'] = null !== $this->configInfo ? $this->configInfo->toArray($noStream) : $this->configInfo;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->egressIp) {
            $res['EgressIp'] = $this->egressIp;
        }

        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }

        if (null !== $this->portMappings) {
            if (\is_array($this->portMappings)) {
                $res['PortMappings'] = [];
                $n1 = 0;
                foreach ($this->portMappings as $item1) {
                    $res['PortMappings'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->renderingInstanceId) {
            $res['RenderingInstanceId'] = $this->renderingInstanceId;
        }

        if (null !== $this->renderingSpec) {
            $res['RenderingSpec'] = $this->renderingSpec;
        }

        if (null !== $this->renderingStatus) {
            $res['RenderingStatus'] = null !== $this->renderingStatus ? $this->renderingStatus->toArray($noStream) : $this->renderingStatus;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
        }

        if (null !== $this->systemInfo) {
            $res['SystemInfo'] = null !== $this->systemInfo ? $this->systemInfo->toArray($noStream) : $this->systemInfo;
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
        if (isset($map['ConfigInfo'])) {
            $model->configInfo = configInfo::fromMap($map['ConfigInfo']);
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['EgressIp'])) {
            $model->egressIp = $map['EgressIp'];
        }

        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }

        if (isset($map['PortMappings'])) {
            if (!empty($map['PortMappings'])) {
                $model->portMappings = [];
                $n1 = 0;
                foreach ($map['PortMappings'] as $item1) {
                    $model->portMappings[$n1++] = portMappings::fromMap($item1);
                }
            }
        }

        if (isset($map['RenderingInstanceId'])) {
            $model->renderingInstanceId = $map['RenderingInstanceId'];
        }

        if (isset($map['RenderingSpec'])) {
            $model->renderingSpec = $map['RenderingSpec'];
        }

        if (isset($map['RenderingStatus'])) {
            $model->renderingStatus = renderingStatus::fromMap($map['RenderingStatus']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StorageSize'])) {
            $model->storageSize = $map['StorageSize'];
        }

        if (isset($map['SystemInfo'])) {
            $model->systemInfo = systemInfo::fromMap($map['SystemInfo']);
        }

        return $model;
    }
}
