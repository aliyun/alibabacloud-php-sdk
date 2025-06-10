<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingSessionResponseBody\additionalIngresses;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingSessionResponseBody\location;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingSessionResponseBody\portMappings;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingSessionResponseBody\stateInfo;

class DescribeRenderingSessionResponseBody extends Model
{
    /**
     * @var additionalIngresses[]
     */
    public $additionalIngresses;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $clientId;

    /**
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
    public $requestId;

    /**
     * @var string
     */
    public $sessionId;

    /**
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
        'requestId' => 'RequestId',
        'sessionId' => 'SessionId',
        'startTime' => 'StartTime',
        'stateInfo' => 'StateInfo',
    ];

    public function validate()
    {
        if (\is_array($this->additionalIngresses)) {
            Model::validateArray($this->additionalIngresses);
        }
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
        if (null !== $this->additionalIngresses) {
            if (\is_array($this->additionalIngresses)) {
                $res['AdditionalIngresses'] = [];
                $n1 = 0;
                foreach ($this->additionalIngresses as $item1) {
                    $res['AdditionalIngresses'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['AdditionalIngresses'])) {
            if (!empty($map['AdditionalIngresses'])) {
                $model->additionalIngresses = [];
                $n1 = 0;
                foreach ($map['AdditionalIngresses'] as $item1) {
                    $model->additionalIngresses[$n1++] = additionalIngresses::fromMap($item1);
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

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['StateInfo'])) {
            $model->stateInfo = stateInfo::fromMap($map['StateInfo']);
        }

        return $model;
    }
}
