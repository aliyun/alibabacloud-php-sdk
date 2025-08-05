<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\CreatePluginAttachmentResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $pluginAttachmentId;
    protected $_name = [
        'pluginAttachmentId' => 'pluginAttachmentId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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
        if (isset($map['pluginAttachmentId'])) {
            $model->pluginAttachmentId = $map['pluginAttachmentId'];
        }

        return $model;
    }
}
