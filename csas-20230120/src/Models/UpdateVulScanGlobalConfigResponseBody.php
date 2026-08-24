<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\UpdateVulScanGlobalConfigResponseBody\wuyingVulFixConfig;

class UpdateVulScanGlobalConfigResponseBody extends Model
{
    /**
     * @var int
     */
    public $maxDownloadSpeed;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var wuyingVulFixConfig
     */
    public $wuyingVulFixConfig;
    protected $_name = [
        'maxDownloadSpeed' => 'MaxDownloadSpeed',
        'requestId' => 'RequestId',
        'wuyingVulFixConfig' => 'WuyingVulFixConfig',
    ];

    public function validate()
    {
        if (null !== $this->wuyingVulFixConfig) {
            $this->wuyingVulFixConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxDownloadSpeed) {
            $res['MaxDownloadSpeed'] = $this->maxDownloadSpeed;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->wuyingVulFixConfig) {
            $res['WuyingVulFixConfig'] = null !== $this->wuyingVulFixConfig ? $this->wuyingVulFixConfig->toArray($noStream) : $this->wuyingVulFixConfig;
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
        if (isset($map['MaxDownloadSpeed'])) {
            $model->maxDownloadSpeed = $map['MaxDownloadSpeed'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['WuyingVulFixConfig'])) {
            $model->wuyingVulFixConfig = wuyingVulFixConfig::fromMap($map['WuyingVulFixConfig']);
        }

        return $model;
    }
}
