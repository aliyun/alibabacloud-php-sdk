<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class UpdateSessionInput extends Model
{
    /**
     * @var bool
     */
    public $disableSessionIdReuse;

    /**
     * @var bool
     */
    public $enableAutoPause;

    /**
     * @var bool
     */
    public $enableAutoResume;

    /**
     * @var JuiceFsConfig
     */
    public $juiceFsConfig;

    /**
     * @var NASConfig
     */
    public $nasConfig;

    /**
     * @var OSSMountConfig
     */
    public $ossMountConfig;

    /**
     * @var PolarFsConfig
     */
    public $polarFsConfig;

    /**
     * @var int
     */
    public $sessionIdleTimeoutInSeconds;

    /**
     * @var int
     */
    public $sessionTTLInSeconds;
    protected $_name = [
        'disableSessionIdReuse' => 'disableSessionIdReuse',
        'enableAutoPause' => 'enableAutoPause',
        'enableAutoResume' => 'enableAutoResume',
        'juiceFsConfig' => 'juiceFsConfig',
        'nasConfig' => 'nasConfig',
        'ossMountConfig' => 'ossMountConfig',
        'polarFsConfig' => 'polarFsConfig',
        'sessionIdleTimeoutInSeconds' => 'sessionIdleTimeoutInSeconds',
        'sessionTTLInSeconds' => 'sessionTTLInSeconds',
    ];

    public function validate()
    {
        if (null !== $this->juiceFsConfig) {
            $this->juiceFsConfig->validate();
        }
        if (null !== $this->nasConfig) {
            $this->nasConfig->validate();
        }
        if (null !== $this->ossMountConfig) {
            $this->ossMountConfig->validate();
        }
        if (null !== $this->polarFsConfig) {
            $this->polarFsConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->disableSessionIdReuse) {
            $res['disableSessionIdReuse'] = $this->disableSessionIdReuse;
        }

        if (null !== $this->enableAutoPause) {
            $res['enableAutoPause'] = $this->enableAutoPause;
        }

        if (null !== $this->enableAutoResume) {
            $res['enableAutoResume'] = $this->enableAutoResume;
        }

        if (null !== $this->juiceFsConfig) {
            $res['juiceFsConfig'] = null !== $this->juiceFsConfig ? $this->juiceFsConfig->toArray($noStream) : $this->juiceFsConfig;
        }

        if (null !== $this->nasConfig) {
            $res['nasConfig'] = null !== $this->nasConfig ? $this->nasConfig->toArray($noStream) : $this->nasConfig;
        }

        if (null !== $this->ossMountConfig) {
            $res['ossMountConfig'] = null !== $this->ossMountConfig ? $this->ossMountConfig->toArray($noStream) : $this->ossMountConfig;
        }

        if (null !== $this->polarFsConfig) {
            $res['polarFsConfig'] = null !== $this->polarFsConfig ? $this->polarFsConfig->toArray($noStream) : $this->polarFsConfig;
        }

        if (null !== $this->sessionIdleTimeoutInSeconds) {
            $res['sessionIdleTimeoutInSeconds'] = $this->sessionIdleTimeoutInSeconds;
        }

        if (null !== $this->sessionTTLInSeconds) {
            $res['sessionTTLInSeconds'] = $this->sessionTTLInSeconds;
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
        if (isset($map['disableSessionIdReuse'])) {
            $model->disableSessionIdReuse = $map['disableSessionIdReuse'];
        }

        if (isset($map['enableAutoPause'])) {
            $model->enableAutoPause = $map['enableAutoPause'];
        }

        if (isset($map['enableAutoResume'])) {
            $model->enableAutoResume = $map['enableAutoResume'];
        }

        if (isset($map['juiceFsConfig'])) {
            $model->juiceFsConfig = JuiceFsConfig::fromMap($map['juiceFsConfig']);
        }

        if (isset($map['nasConfig'])) {
            $model->nasConfig = NASConfig::fromMap($map['nasConfig']);
        }

        if (isset($map['ossMountConfig'])) {
            $model->ossMountConfig = OSSMountConfig::fromMap($map['ossMountConfig']);
        }

        if (isset($map['polarFsConfig'])) {
            $model->polarFsConfig = PolarFsConfig::fromMap($map['polarFsConfig']);
        }

        if (isset($map['sessionIdleTimeoutInSeconds'])) {
            $model->sessionIdleTimeoutInSeconds = $map['sessionIdleTimeoutInSeconds'];
        }

        if (isset($map['sessionTTLInSeconds'])) {
            $model->sessionTTLInSeconds = $map['sessionTTLInSeconds'];
        }

        return $model;
    }
}
