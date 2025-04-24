<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201001\Models\GetMcpResourceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20201001\Models\GetMcpResourceResponseBody\data\desktopInfo;

class data extends Model
{
    /**
     * @var desktopInfo
     */
    public $desktopInfo;

    /**
     * @var string
     */
    public $resourceUrl;

    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'desktopInfo' => 'DesktopInfo',
        'resourceUrl' => 'ResourceUrl',
        'sessionId' => 'SessionId',
    ];

    public function validate()
    {
        if (null !== $this->desktopInfo) {
            $this->desktopInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desktopInfo) {
            $res['DesktopInfo'] = null !== $this->desktopInfo ? $this->desktopInfo->toArray($noStream) : $this->desktopInfo;
        }

        if (null !== $this->resourceUrl) {
            $res['ResourceUrl'] = $this->resourceUrl;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
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
        if (isset($map['DesktopInfo'])) {
            $model->desktopInfo = desktopInfo::fromMap($map['DesktopInfo']);
        }

        if (isset($map['ResourceUrl'])) {
            $model->resourceUrl = $map['ResourceUrl'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}
