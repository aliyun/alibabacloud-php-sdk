<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\StartRenderingSessionResponseBody\location;
use AlibabaCloud\SDK\Vs\V20181212\Models\StartRenderingSessionResponseBody\portMappings;
use AlibabaCloud\SDK\Vs\V20181212\Models\StartRenderingSessionResponseBody\stateInfo;

class StartRenderingSessionResponseBody extends Model
{
    /**
     * @var string
     */
    public $hostname;

    /**
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
    public $requestId;

    /**
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
        'requestId' => 'RequestId',
        'sessionId' => 'SessionId',
        'stateInfo' => 'StateInfo',
    ];

    public function validate()
    {
        if (null !== $this->location) {
            $this->location->validate();
        }
        if (\is_array($this->portMappings)) {
            Model::validateArray($this->portMappings);
        }
        if (null !== $this->stateInfo) {
            $this->stateInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }

        if (null !== $this->isRepeatedRequest) {
            $res['IsRepeatedRequest'] = $this->isRepeatedRequest;
        }

        if (null !== $this->location) {
            $res['Location'] = null !== $this->location ? $this->location->toArray($noStream) : $this->location;
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

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->stateInfo) {
            $res['StateInfo'] = null !== $this->stateInfo ? $this->stateInfo->toArray($noStream) : $this->stateInfo;
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
                $n1 = 0;
                foreach ($map['PortMappings'] as $item1) {
                    $model->portMappings[$n1++] = portMappings::fromMap($item1);
                }
            }
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
