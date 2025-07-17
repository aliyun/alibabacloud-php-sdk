<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\CreatePluginAttachmentResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example pa-cvs7jpmm1hkgihaqv4a0
     *
     * @var string
     */
    public $pluginAttachmentId;
    protected $_name = [
        'pluginAttachmentId' => 'pluginAttachmentId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->pluginAttachmentId) {
            $res['pluginAttachmentId'] = $this->pluginAttachmentId;
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
        if (isset($map['pluginAttachmentId'])) {
            $model->pluginAttachmentId = $map['pluginAttachmentId'];
        }

        return $model;
    }
}
