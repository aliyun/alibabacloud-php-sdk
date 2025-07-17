<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListPluginsResponseBody\data\items;

use AlibabaCloud\Tea\Model;

class attachmentInfo extends Model
{
    /**
     * @example false
     *
     * @var string
     */
    public $enable;

    /**
     * @example pa-ct2irn6m1hkreaen0t40
     *
     * @var string
     */
    public $pluginAttachmentId;
    protected $_name = [
        'enable' => 'enable',
        'pluginAttachmentId' => 'pluginAttachmentId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }
        if (null !== $this->pluginAttachmentId) {
            $res['pluginAttachmentId'] = $this->pluginAttachmentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attachmentInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }
        if (isset($map['pluginAttachmentId'])) {
            $model->pluginAttachmentId = $map['pluginAttachmentId'];
        }

        return $model;
    }
}
