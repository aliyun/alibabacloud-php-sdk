<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetPluginAttachmentResponseBody;

use AlibabaCloud\SDK\APIG\V20240327\Models\EnvironmentInfo;
use AlibabaCloud\SDK\APIG\V20240327\Models\GatewayInfo;
use AlibabaCloud\SDK\APIG\V20240327\Models\ParentResourceInfo;
use AlibabaCloud\SDK\APIG\V20240327\Models\PluginClassInfo;
use AlibabaCloud\SDK\APIG\V20240327\Models\ResourceInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example true
     *
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
     * @example pa-d05f1tmm1hku195dd8j0
     *
     * @var string
     */
    public $pluginAttachmentId;

    /**
     * @var PluginClassInfo
     */
    public $pluginClassInfo;

    /**
     * @example cHJlcGVuZDoKLSByb2xlOiBzeXN0ZW0KICBjb250ZW50OiDor7fkvb/nlKjoi7Hor63lm57nrZTpl67popgKYXBwZW5kOgotIHJvbGU6IHVzZXIKICBjb250ZW50OiDmr4/mrKHlm57nrZTlrozpl67popjvvIzlsJ3or5Xov5vooYzlj43pl64K
     *
     * @var string
     */
    public $pluginConfig;

    /**
     * @example pl-cvo8ub6m1hkvgv03r3k0
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }
        if (null !== $this->environmentInfo) {
            $res['environmentInfo'] = null !== $this->environmentInfo ? $this->environmentInfo->toMap() : null;
        }
        if (null !== $this->gatewayInfo) {
            $res['gatewayInfo'] = null !== $this->gatewayInfo ? $this->gatewayInfo->toMap() : null;
        }
        if (null !== $this->parentResourceInfo) {
            $res['parentResourceInfo'] = null !== $this->parentResourceInfo ? $this->parentResourceInfo->toMap() : null;
        }
        if (null !== $this->pluginAttachmentId) {
            $res['pluginAttachmentId'] = $this->pluginAttachmentId;
        }
        if (null !== $this->pluginClassInfo) {
            $res['pluginClassInfo'] = null !== $this->pluginClassInfo ? $this->pluginClassInfo->toMap() : null;
        }
        if (null !== $this->pluginConfig) {
            $res['pluginConfig'] = $this->pluginConfig;
        }
        if (null !== $this->pluginId) {
            $res['pluginId'] = $this->pluginId;
        }
        if (null !== $this->resourceInfos) {
            $res['resourceInfos'] = [];
            if (null !== $this->resourceInfos && \is_array($this->resourceInfos)) {
                $n = 0;
                foreach ($this->resourceInfos as $item) {
                    $res['resourceInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
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
                $n = 0;
                foreach ($map['resourceInfos'] as $item) {
                    $model->resourceInfos[$n++] = null !== $item ? ResourceInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
