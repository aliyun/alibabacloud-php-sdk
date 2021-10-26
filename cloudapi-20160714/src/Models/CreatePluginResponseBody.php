<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class CreatePluginResponseBody extends Model
{
    /**
     * @var string
     */
    public $pluginId;

    /**
     * @var bool
     */
    public $tagStatus;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pluginId'  => 'PluginId',
        'tagStatus' => 'TagStatus',
        'requestId' => 'RequestId',
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
        if (null !== $this->tagStatus) {
            $res['TagStatus'] = $this->tagStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['TagStatus'])) {
            $model->tagStatus = $map['TagStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
