<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListPluginsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPluginsResponseBody\data\items\attachmentInfo;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPluginsResponseBody\data\items\gatewayInfo;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListPluginsResponseBody\data\items\pluginClassInfo;

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
     * @var string
     */
    public $pluginId;
    protected $_name = [
        'attachmentInfo' => 'attachmentInfo',
        'gatewayInfo' => 'gatewayInfo',
        'pluginClassInfo' => 'pluginClassInfo',
        'pluginId' => 'pluginId',
    ];

    public function validate()
    {
        if (null !== $this->attachmentInfo) {
            $this->attachmentInfo->validate();
        }
        if (null !== $this->gatewayInfo) {
            $this->gatewayInfo->validate();
        }
        if (null !== $this->pluginClassInfo) {
            $this->pluginClassInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachmentInfo) {
            $res['attachmentInfo'] = null !== $this->attachmentInfo ? $this->attachmentInfo->toArray($noStream) : $this->attachmentInfo;
        }

        if (null !== $this->gatewayInfo) {
            $res['gatewayInfo'] = null !== $this->gatewayInfo ? $this->gatewayInfo->toArray($noStream) : $this->gatewayInfo;
        }

        if (null !== $this->pluginClassInfo) {
            $res['pluginClassInfo'] = null !== $this->pluginClassInfo ? $this->pluginClassInfo->toArray($noStream) : $this->pluginClassInfo;
        }

        if (null !== $this->pluginId) {
            $res['pluginId'] = $this->pluginId;
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
