<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListPluginsResponseBody\data;

use AlibabaCloud\SDK\APIG\V20240327\Models\ListPluginsResponseBody\data\items\attachmentInfo;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPluginsResponseBody\data\items\gatewayInfo;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPluginsResponseBody\data\items\pluginClassInfo;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var attachmentInfo
     */
    public $attachmentInfo;

    /**
     * @var gatewayInfo
     */
    public $gatewayInfo;

    /**
     * @var pluginClassInfo
     */
    public $pluginClassInfo;

    /**
     * @example pl-cvu6r4um1hko3b3ti0a0
     *
     * @var string
     */
    public $pluginId;
    protected $_name = [
        'attachmentInfo' => 'attachmentInfo',
        'gatewayInfo' => 'gatewayInfo',
        'pluginClassInfo' => 'pluginClassInfo',
        'pluginId' => 'pluginId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachmentInfo) {
            $res['attachmentInfo'] = null !== $this->attachmentInfo ? $this->attachmentInfo->toMap() : null;
        }
        if (null !== $this->gatewayInfo) {
            $res['gatewayInfo'] = null !== $this->gatewayInfo ? $this->gatewayInfo->toMap() : null;
        }
        if (null !== $this->pluginClassInfo) {
            $res['pluginClassInfo'] = null !== $this->pluginClassInfo ? $this->pluginClassInfo->toMap() : null;
        }
        if (null !== $this->pluginId) {
            $res['pluginId'] = $this->pluginId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['attachmentInfo'])) {
            $model->attachmentInfo = attachmentInfo::fromMap($map['attachmentInfo']);
        }
        if (isset($map['gatewayInfo'])) {
            $model->gatewayInfo = gatewayInfo::fromMap($map['gatewayInfo']);
        }
        if (isset($map['pluginClassInfo'])) {
            $model->pluginClassInfo = pluginClassInfo::fromMap($map['pluginClassInfo']);
        }
        if (isset($map['pluginId'])) {
            $model->pluginId = $map['pluginId'];
        }

        return $model;
    }
}
