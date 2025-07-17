<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class UpdatePluginAttachmentRequest extends Model
{
    /**
     * @var string[]
     */
    public $attachResourceIds;

    /**
     * @example false
     *
     * @var bool
     */
    public $enable;

    /**
     * @example cHJlcGVuZDoKLSByb2xlOiBzeXN0ZW0KICBjb250ZW50OiDor7fkvb/nlKjoi7Hor63lm57nrZTpl67popgKYXBwZW5kOgotIHJvbGU6IHVzZXIKICBjb250ZW50OiDmr4/mrKHlm57nrZTlrozpl67popjvvIzlsJ3or5Xov5vooYzlj43pl64K
     *
     * @var string
     */
    public $pluginConfig;
    protected $_name = [
        'attachResourceIds' => 'attachResourceIds',
        'enable' => 'enable',
        'pluginConfig' => 'pluginConfig',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachResourceIds) {
            $res['attachResourceIds'] = $this->attachResourceIds;
        }
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }
        if (null !== $this->pluginConfig) {
            $res['pluginConfig'] = $this->pluginConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePluginAttachmentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['attachResourceIds'])) {
            if (!empty($map['attachResourceIds'])) {
                $model->attachResourceIds = $map['attachResourceIds'];
            }
        }
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }
        if (isset($map['pluginConfig'])) {
            $model->pluginConfig = $map['pluginConfig'];
        }

        return $model;
    }
}
