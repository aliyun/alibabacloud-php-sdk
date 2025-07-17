<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class CreatePluginAttachmentRequest extends Model
{
    /**
     * @var string[]
     */
    public $attachResourceIds;

    /**
     * @example HttpApi
     *
     * @var string
     */
    public $attachResourceType;

    /**
     * @example false
     *
     * @var bool
     */
    public $enable;

    /**
     * @example env-xxx
     *
     * @var string
     */
    public $environmentId;

    /**
     * @example gw-cq7l5s5lhtg***
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @example cHJlcGVuZDoKLSByb2xlOiBzeXN0ZW0KICBjb250ZW50OiDor7fkvb/nlKjoi7Hor63lm57nrZTpl67popgKYXBwZW5kOgotIHJvbGU6IHVzZXIKICBjb250ZW50OiDmr4/mrKHlm57nrZTlrozpl67popjvvIzlsJ3or5Xov5vooYzlj43pl64K
     *
     * @var string
     */
    public $pluginConfig;

    /**
     * @example pl-cvo8udem1hkob1qd67i0
     *
     * @var string
     */
    public $pluginId;
    protected $_name = [
        'attachResourceIds' => 'attachResourceIds',
        'attachResourceType' => 'attachResourceType',
        'enable' => 'enable',
        'environmentId' => 'environmentId',
        'gatewayId' => 'gatewayId',
        'pluginConfig' => 'pluginConfig',
        'pluginId' => 'pluginId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachResourceIds) {
            $res['attachResourceIds'] = $this->attachResourceIds;
        }
        if (null !== $this->attachResourceType) {
            $res['attachResourceType'] = $this->attachResourceType;
        }
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }
        if (null !== $this->environmentId) {
            $res['environmentId'] = $this->environmentId;
        }
        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }
        if (null !== $this->pluginConfig) {
            $res['pluginConfig'] = $this->pluginConfig;
        }
        if (null !== $this->pluginId) {
            $res['pluginId'] = $this->pluginId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePluginAttachmentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['attachResourceIds'])) {
            if (!empty($map['attachResourceIds'])) {
                $model->attachResourceIds = $map['attachResourceIds'];
            }
        }
        if (isset($map['attachResourceType'])) {
            $model->attachResourceType = $map['attachResourceType'];
        }
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }
        if (isset($map['environmentId'])) {
            $model->environmentId = $map['environmentId'];
        }
        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }
        if (isset($map['pluginConfig'])) {
            $model->pluginConfig = $map['pluginConfig'];
        }
        if (isset($map['pluginId'])) {
            $model->pluginId = $map['pluginId'];
        }

        return $model;
    }
}
