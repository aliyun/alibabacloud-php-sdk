<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingSessionResponseBody\additionalIngresses;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingSessionResponseBody\location;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingSessionResponseBody\portMappings;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingSessionResponseBody\stateInfo;
use AlibabaCloud\Tea\Model;

class DescribeRenderingSessionResponseBody extends Model
{
    /**
     * @var additionalIngresses[]
     */
    public $additionalIngresses;

    /**
     * @example cap-b06b26edfhytbn b94a75ae1a79efc90eb
     *
     * @var string
     */
    public $appId;

    /**
     * @example c91263a0-f9ac-45bd-bbe9-6e293ad32d91
     *
     * @var string
     */
    public $clientId;

    /**
     * @example 111.45.29.96
     *
     * @var string
     */
    public $hostname;

    /**
     * @var string
     */
    public $isp;

    /**
     * @var location
     */
    public $location;

    /**
     * @var portMappings[]
     */
    public $portMappings;

    /**
     * @var string
     */
    public $renderingInstanceId;

    /**
     * @example BEA5625F-8FCF-48F4-851B-CA63946DA664
     *
     * @var string
     */
    public $requestId;

    /**
     * @example session-i205217481741918129226
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example 2025-05-18T02:20:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @var stateInfo
     */
    public $stateInfo;
    protected $_name = [
        'additionalIngresses' => 'AdditionalIngresses',
        'appId' => 'AppId',
        'clientId' => 'ClientId',
        'hostname' => 'Hostname',
        'isp' => 'Isp',
        'location' => 'Location',
        'portMappings' => 'PortMappings',
        'renderingInstanceId' => 'RenderingInstanceId',
        'requestId' => 'RequestId',
        'sessionId' => 'SessionId',
        'startTime' => 'StartTime',
        'stateInfo' => 'StateInfo',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->additionalIngresses) {
            $res['AdditionalIngresses'] = [];
            if (null !== $this->additionalIngresses && \is_array($this->additionalIngresses)) {
                $n = 0;
                foreach ($this->additionalIngresses as $item) {
                    $res['AdditionalIngresses'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }
        if (null !== $this->location) {
            $res['Location'] = null !== $this->location ? $this->location->toMap() : null;
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->stateInfo) {
            $res['StateInfo'] = null !== $this->stateInfo ? $this->stateInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRenderingSessionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdditionalIngresses'])) {
            if (!empty($map['AdditionalIngresses'])) {
                $model->additionalIngresses = [];
                $n = 0;
                foreach ($map['AdditionalIngresses'] as $item) {
                    $model->additionalIngresses[$n++] = null !== $item ? additionalIngresses::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }
        if (isset($map['Location'])) {
            $model->location = location::fromMap($map['Location']);
        }
        if (isset($map['PortMappings'])) {
            if (!empty($map['PortMappings'])) {
                $model->portMappings = [];
                $n = 0;
                foreach ($map['PortMappings'] as $item) {
                    $model->portMappings[$n++] = null !== $item ? portMappings::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RenderingInstanceId'])) {
            $model->renderingInstanceId = $map['RenderingInstanceId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StateInfo'])) {
            $model->stateInfo = stateInfo::fromMap($map['StateInfo']);
        }

        return $model;
    }
}
