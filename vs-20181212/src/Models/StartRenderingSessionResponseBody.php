<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\SDK\Vs\V20181212\Models\StartRenderingSessionResponseBody\location;
use AlibabaCloud\SDK\Vs\V20181212\Models\StartRenderingSessionResponseBody\portMappings;
use AlibabaCloud\SDK\Vs\V20181212\Models\StartRenderingSessionResponseBody\stateInfo;
use AlibabaCloud\Tea\Model;

class StartRenderingSessionResponseBody extends Model
{
    /**
     * @example cn-xxx.ecr.aliyuncs.com
     *
     * @var string
     */
    public $hostname;

    /**
     * @example false
     *
     * @var bool
     */
    public $isRepeatedRequest;

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
     * @var stateInfo
     */
    public $stateInfo;
    protected $_name = [
        'hostname' => 'Hostname',
        'isRepeatedRequest' => 'IsRepeatedRequest',
        'location' => 'Location',
        'portMappings' => 'PortMappings',
        'renderingInstanceId' => 'RenderingInstanceId',
        'requestId' => 'RequestId',
        'sessionId' => 'SessionId',
        'stateInfo' => 'StateInfo',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }
        if (null !== $this->isRepeatedRequest) {
            $res['IsRepeatedRequest'] = $this->isRepeatedRequest;
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
        if (null !== $this->stateInfo) {
            $res['StateInfo'] = null !== $this->stateInfo ? $this->stateInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartRenderingSessionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }
        if (isset($map['IsRepeatedRequest'])) {
            $model->isRepeatedRequest = $map['IsRepeatedRequest'];
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
        if (isset($map['StateInfo'])) {
            $model->stateInfo = stateInfo::fromMap($map['StateInfo']);
        }

        return $model;
    }
}
