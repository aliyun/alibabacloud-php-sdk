<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class UpdatePortalRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var HiMarketPortalSettingConfig
     */
    public $portalSettingConfig;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'description' => 'description',
        'name' => 'name',
        'portalSettingConfig' => 'portalSettingConfig',
        'clientToken' => 'clientToken',
    ];

    public function validate()
    {
        if (null !== $this->portalSettingConfig) {
            $this->portalSettingConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->portalSettingConfig) {
            $res['portalSettingConfig'] = null !== $this->portalSettingConfig ? $this->portalSettingConfig->toArray($noStream) : $this->portalSettingConfig;
        }

        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['portalSettingConfig'])) {
            $model->portalSettingConfig = HiMarketPortalSettingConfig::fromMap($map['portalSettingConfig']);
        }

        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        return $model;
    }
}
