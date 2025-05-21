<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetPluginAttachmentResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\EnvironmentInfo;
use AlibabaCloud\SDK\APIG\V20240327\Models\GatewayInfo;
use AlibabaCloud\SDK\APIG\V20240327\Models\ParentResourceInfo;
use AlibabaCloud\SDK\APIG\V20240327\Models\PluginClassInfo;
use AlibabaCloud\SDK\APIG\V20240327\Models\ResourceInfo;

class data extends Model
{
    /**
     * @var bool
     */
    public $enable;

    /**
     * @var EnvironmentInfo
     */
    public $environmentInfo;

    /**
     * @var GatewayInfo
     */
    public $gatewayInfo;

    /**
     * @var ParentResourceInfo
     */
    public $parentResourceInfo;

    /**
     * @var string
     */
    public $pluginAttachmentId;

    /**
     * @var PluginClassInfo
     */
    public $pluginClassInfo;

    /**
     * @var string
     */
    public $pluginConfig;

    /**
     * @var string
     */
    public $pluginId;

    /**
     * @var ResourceInfo[]
     */
    public $resourceInfos;
    protected $_name = [
        'enable' => 'enable',
        'environmentInfo' => 'environmentInfo',
        'gatewayInfo' => 'gatewayInfo',
        'parentResourceInfo' => 'parentResourceInfo',
        'pluginAttachmentId' => 'pluginAttachmentId',
        'pluginClassInfo' => 'pluginClassInfo',
        'pluginConfig' => 'pluginConfig',
        'pluginId' => 'pluginId',
        'resourceInfos' => 'resourceInfos',
    ];

    public function validate()
    {
        if (null !== $this->environmentInfo) {
            $this->environmentInfo->validate();
        }
        if (null !== $this->gatewayInfo) {
            $this->gatewayInfo->validate();
        }
        if (null !== $this->parentResourceInfo) {
            $this->parentResourceInfo->validate();
        }
        if (null !== $this->pluginClassInfo) {
            $this->pluginClassInfo->validate();
        }
        if (\is_array($this->resourceInfos)) {
            Model::validateArray($this->resourceInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        if (null !== $this->environmentInfo) {
            $res['environmentInfo'] = null !== $this->environmentInfo ? $this->environmentInfo->toArray($noStream) : $this->environmentInfo;
        }

        if (null !== $this->gatewayInfo) {
            $res['gatewayInfo'] = null !== $this->gatewayInfo ? $this->gatewayInfo->toArray($noStream) : $this->gatewayInfo;
        }

        if (null !== $this->parentResourceInfo) {
            $res['parentResourceInfo'] = null !== $this->parentResourceInfo ? $this->parentResourceInfo->toArray($noStream) : $this->parentResourceInfo;
        }

        if (null !== $this->pluginAttachmentId) {
            $res['pluginAttachmentId'] = $this->pluginAttachmentId;
        }

        if (null !== $this->pluginClassInfo) {
            $res['pluginClassInfo'] = null !== $this->pluginClassInfo ? $this->pluginClassInfo->toArray($noStream) : $this->pluginClassInfo;
        }

        if (null !== $this->pluginConfig) {
            $res['pluginConfig'] = $this->pluginConfig;
        }

        if (null !== $this->pluginId) {
            $res['pluginId'] = $this->pluginId;
        }

        if (null !== $this->resourceInfos) {
            if (\is_array($this->resourceInfos)) {
                $res['resourceInfos'] = [];
                $n1 = 0;
                foreach ($this->resourceInfos as $item1) {
                    $res['resourceInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        if (isset($map['environmentInfo'])) {
            $model->environmentInfo = EnvironmentInfo::fromMap($map['environmentInfo']);
        }

        if (isset($map['gatewayInfo'])) {
            $model->gatewayInfo = GatewayInfo::fromMap($map['gatewayInfo']);
        }

        if (isset($map['parentResourceInfo'])) {
            $model->parentResourceInfo = ParentResourceInfo::fromMap($map['parentResourceInfo']);
        }

        if (isset($map['pluginAttachmentId'])) {
            $model->pluginAttachmentId = $map['pluginAttachmentId'];
        }

        if (isset($map['pluginClassInfo'])) {
            $model->pluginClassInfo = PluginClassInfo::fromMap($map['pluginClassInfo']);
        }

        if (isset($map['pluginConfig'])) {
            $model->pluginConfig = $map['pluginConfig'];
        }

        if (isset($map['pluginId'])) {
            $model->pluginId = $map['pluginId'];
        }

        if (isset($map['resourceInfos'])) {
            if (!empty($map['resourceInfos'])) {
                $model->resourceInfos = [];
                $n1 = 0;
                foreach ($map['resourceInfos'] as $item1) {
                    $model->resourceInfos[$n1++] = ResourceInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
