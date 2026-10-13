<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetPortalResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\HiMarketPortalDomainConfig;
use AlibabaCloud\SDK\APIG\V20240327\Models\HiMarketPortalSettingConfig;

class data extends Model
{
    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var HiMarketPortalDomainConfig[]
     */
    public $portalDomainConfig;

    /**
     * @var string
     */
    public $portalId;

    /**
     * @var HiMarketPortalSettingConfig
     */
    public $portalSettingConfig;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'createdAt' => 'createdAt',
        'description' => 'description',
        'name' => 'name',
        'portalDomainConfig' => 'portalDomainConfig',
        'portalId' => 'portalId',
        'portalSettingConfig' => 'portalSettingConfig',
        'regionId' => 'regionId',
    ];

    public function validate()
    {
        if (\is_array($this->portalDomainConfig)) {
            Model::validateArray($this->portalDomainConfig);
        }
        if (null !== $this->portalSettingConfig) {
            $this->portalSettingConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->portalDomainConfig) {
            if (\is_array($this->portalDomainConfig)) {
                $res['portalDomainConfig'] = [];
                $n1 = 0;
                foreach ($this->portalDomainConfig as $item1) {
                    $res['portalDomainConfig'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->portalId) {
            $res['portalId'] = $this->portalId;
        }

        if (null !== $this->portalSettingConfig) {
            $res['portalSettingConfig'] = null !== $this->portalSettingConfig ? $this->portalSettingConfig->toArray($noStream) : $this->portalSettingConfig;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
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
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['portalDomainConfig'])) {
            if (!empty($map['portalDomainConfig'])) {
                $model->portalDomainConfig = [];
                $n1 = 0;
                foreach ($map['portalDomainConfig'] as $item1) {
                    $model->portalDomainConfig[$n1] = HiMarketPortalDomainConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['portalId'])) {
            $model->portalId = $map['portalId'];
        }

        if (isset($map['portalSettingConfig'])) {
            $model->portalSettingConfig = HiMarketPortalSettingConfig::fromMap($map['portalSettingConfig']);
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}
