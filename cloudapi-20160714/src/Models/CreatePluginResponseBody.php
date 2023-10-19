<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class CreatePluginResponseBody extends Model
{
    /**
     * @description The ID of the plug-in.
     *
     * @example 1f3bde29b43d4d53989248327ff737f2
     *
     * @var string
     */
    public $pluginId;

    /**
     * @description The ID of the request.
     *
     * @example EF924FE4-2EDD-4CD3-89EC-34E4708574E7
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the plug-in is successfully marked.
     *
     * @example true
     *
     * @var bool
     */
    public $tagStatus;
    protected $_name = [
        'pluginId'  => 'PluginId',
        'requestId' => 'RequestId',
        'tagStatus' => 'TagStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pluginId) {
            $res['PluginId'] = $this->pluginId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->tagStatus) {
            $res['TagStatus'] = $this->tagStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePluginResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PluginId'])) {
            $model->pluginId = $map['PluginId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TagStatus'])) {
            $model->tagStatus = $map['TagStatus'];
        }

        return $model;
    }
}
