<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\ListRenderingSessionsResponseBody;

use AlibabaCloud\Tea\Model;

class sessions extends Model
{
    /**
     * @example cap-4e1a6a425495458ba78693b8ac6600ea
     *
     * @var string
     */
    public $appId;

    /**
     * @example fd6b2134-7954-4754-8915-5fb8b0469622
     *
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $renderingInstanceId;

    /**
     * @example session-i205217481741918129226
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example 2024-07-04T01:23:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'appId' => 'AppId',
        'clientId' => 'ClientId',
        'renderingInstanceId' => 'RenderingInstanceId',
        'sessionId' => 'SessionId',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->renderingInstanceId) {
            $res['RenderingInstanceId'] = $this->renderingInstanceId;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sessions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['RenderingInstanceId'])) {
            $model->renderingInstanceId = $map['RenderingInstanceId'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
