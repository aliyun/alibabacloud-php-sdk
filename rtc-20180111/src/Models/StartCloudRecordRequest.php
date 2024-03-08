<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudRecordRequest\panes;
use AlibabaCloud\SDK\Rtc\V20180111\Models\StartCloudRecordRequest\storageConfig;
use AlibabaCloud\Tea\Model;

class StartCloudRecordRequest extends Model
{
    /**
     * @description appId
     *
     * @example eo85****
     *
     * @var string
     */
    public $appId;

    /**
     * @description channelName
     *
     * @example testid
     *
     * @var string
     */
    public $channelId;

    /**
     * @description panes
     *
     * @var panes[]
     */
    public $panes;

    /**
     * @description storageConfig
     *
     * @var storageConfig
     */
    public $storageConfig;

    /**
     * @description taskId
     *
     * @example 123
     *
     * @var string
     */
    public $taskId;

    /**
     * @description templateId
     *
     * @example 567
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'appId'         => 'AppId',
        'channelId'     => 'ChannelId',
        'panes'         => 'Panes',
        'storageConfig' => 'StorageConfig',
        'taskId'        => 'TaskId',
        'templateId'    => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->panes) {
            $res['Panes'] = [];
            if (null !== $this->panes && \is_array($this->panes)) {
                $n = 0;
                foreach ($this->panes as $item) {
                    $res['Panes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->storageConfig) {
            $res['StorageConfig'] = null !== $this->storageConfig ? $this->storageConfig->toMap() : null;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartCloudRecordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['Panes'])) {
            if (!empty($map['Panes'])) {
                $model->panes = [];
                $n            = 0;
                foreach ($map['Panes'] as $item) {
                    $model->panes[$n++] = null !== $item ? panes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StorageConfig'])) {
            $model->storageConfig = storageConfig::fromMap($map['StorageConfig']);
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
