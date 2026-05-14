<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\HiMarketPortalDeployConfig\saeConfig;

class HiMarketPortalDeployConfig extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var saeConfig
     */
    public $saeConfig;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'message' => 'message',
        'platform' => 'platform',
        'saeConfig' => 'saeConfig',
        'status' => 'status',
    ];

    public function validate()
    {
        if (null !== $this->saeConfig) {
            $this->saeConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->platform) {
            $res['platform'] = $this->platform;
        }

        if (null !== $this->saeConfig) {
            $res['saeConfig'] = null !== $this->saeConfig ? $this->saeConfig->toArray($noStream) : $this->saeConfig;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['platform'])) {
            $model->platform = $map['platform'];
        }

        if (isset($map['saeConfig'])) {
            $model->saeConfig = saeConfig::fromMap($map['saeConfig']);
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
