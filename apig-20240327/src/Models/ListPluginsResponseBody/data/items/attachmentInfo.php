<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListPluginsResponseBody\data\items;

use AlibabaCloud\Dara\Model;

class attachmentInfo extends Model
{
    /**
     * @var string
     */
    public $enable;

    /**
     * @var string
     */
    public $pluginAttachmentId;
    protected $_name = [
        'enable' => 'enable',
        'pluginAttachmentId' => 'pluginAttachmentId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (isset($map['pluginAttachmentId'])) {
            $model->pluginAttachmentId = $map['pluginAttachmentId'];
        }

        return $model;
    }
}
