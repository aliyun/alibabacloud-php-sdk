<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class CreateSandboxInput extends Model
{
    /**
     * @var NASConfig
     */
    public $nasConfig;

    /**
     * @var OSSMountConfig
     */
    public $ossMountConfig;

    /**
     * @var string
     */
    public $sandboxId;

    /**
     * @var int
     */
    public $sandboxIdleTimeoutInSeconds;

    /**
     * @var int
     */
    public $sandboxIdleTimeoutSeconds;

    /**
     * @var string
     */
    public $templateName;
    protected $_name = [
        'nasConfig' => 'nasConfig',
        'ossMountConfig' => 'ossMountConfig',
        'sandboxId' => 'sandboxId',
        'sandboxIdleTimeoutInSeconds' => 'sandboxIdleTimeoutInSeconds',
        'sandboxIdleTimeoutSeconds' => 'sandboxIdleTimeoutSeconds',
        'templateName' => 'templateName',
    ];

    public function validate()
    {
        if (null !== $this->nasConfig) {
            $this->nasConfig->validate();
        }
        if (null !== $this->ossMountConfig) {
            $this->ossMountConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nasConfig) {
            $res['nasConfig'] = null !== $this->nasConfig ? $this->nasConfig->toArray($noStream) : $this->nasConfig;
        }

        if (null !== $this->ossMountConfig) {
            $res['ossMountConfig'] = null !== $this->ossMountConfig ? $this->ossMountConfig->toArray($noStream) : $this->ossMountConfig;
        }

        if (null !== $this->sandboxId) {
            $res['sandboxId'] = $this->sandboxId;
        }

        if (null !== $this->sandboxIdleTimeoutInSeconds) {
            $res['sandboxIdleTimeoutInSeconds'] = $this->sandboxIdleTimeoutInSeconds;
        }

        if (null !== $this->sandboxIdleTimeoutSeconds) {
            $res['sandboxIdleTimeoutSeconds'] = $this->sandboxIdleTimeoutSeconds;
        }

        if (null !== $this->templateName) {
            $res['templateName'] = $this->templateName;
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
        if (isset($map['nasConfig'])) {
            $model->nasConfig = NASConfig::fromMap($map['nasConfig']);
        }

        if (isset($map['ossMountConfig'])) {
            $model->ossMountConfig = OSSMountConfig::fromMap($map['ossMountConfig']);
        }

        if (isset($map['sandboxId'])) {
            $model->sandboxId = $map['sandboxId'];
        }

        if (isset($map['sandboxIdleTimeoutInSeconds'])) {
            $model->sandboxIdleTimeoutInSeconds = $map['sandboxIdleTimeoutInSeconds'];
        }

        if (isset($map['sandboxIdleTimeoutSeconds'])) {
            $model->sandboxIdleTimeoutSeconds = $map['sandboxIdleTimeoutSeconds'];
        }

        if (isset($map['templateName'])) {
            $model->templateName = $map['templateName'];
        }

        return $model;
    }
}
