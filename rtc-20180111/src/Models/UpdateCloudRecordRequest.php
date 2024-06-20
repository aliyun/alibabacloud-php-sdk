<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateCloudRecordRequest\clockWidgets;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateCloudRecordRequest\images;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateCloudRecordRequest\panes;
use AlibabaCloud\SDK\Rtc\V20180111\Models\UpdateCloudRecordRequest\texts;
use AlibabaCloud\Tea\Model;

class UpdateCloudRecordRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example eo85****
     *
     * @var string
     */
    public $appId;

    /**
     * @description This parameter is required.
     *
     * @example testid
     *
     * @var string
     */
    public $channelId;

    /**
     * @var clockWidgets[]
     */
    public $clockWidgets;

    /**
     * @var images[]
     */
    public $images;

    /**
     * @var panes[]
     */
    public $panes;

    /**
     * @description This parameter is required.
     *
     * @example 123
     *
     * @var string
     */
    public $taskId;

    /**
     * @description This parameter is required.
     *
     * @example 567
     *
     * @var string
     */
    public $templateId;

    /**
     * @var texts[]
     */
    public $texts;
    protected $_name = [
        'appId'        => 'AppId',
        'channelId'    => 'ChannelId',
        'clockWidgets' => 'ClockWidgets',
        'images'       => 'Images',
        'panes'        => 'Panes',
        'taskId'       => 'TaskId',
        'templateId'   => 'TemplateId',
        'texts'        => 'Texts',
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
        if (null !== $this->clockWidgets) {
            $res['ClockWidgets'] = [];
            if (null !== $this->clockWidgets && \is_array($this->clockWidgets)) {
                $n = 0;
                foreach ($this->clockWidgets as $item) {
                    $res['ClockWidgets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->images) {
            $res['Images'] = [];
            if (null !== $this->images && \is_array($this->images)) {
                $n = 0;
                foreach ($this->images as $item) {
                    $res['Images'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->texts) {
            $res['Texts'] = [];
            if (null !== $this->texts && \is_array($this->texts)) {
                $n = 0;
                foreach ($this->texts as $item) {
                    $res['Texts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCloudRecordRequest
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
        if (isset($map['ClockWidgets'])) {
            if (!empty($map['ClockWidgets'])) {
                $model->clockWidgets = [];
                $n                   = 0;
                foreach ($map['ClockWidgets'] as $item) {
                    $model->clockWidgets[$n++] = null !== $item ? clockWidgets::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Images'])) {
            if (!empty($map['Images'])) {
                $model->images = [];
                $n             = 0;
                foreach ($map['Images'] as $item) {
                    $model->images[$n++] = null !== $item ? images::fromMap($item) : $item;
                }
            }
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
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['Texts'])) {
            if (!empty($map['Texts'])) {
                $model->texts = [];
                $n            = 0;
                foreach ($map['Texts'] as $item) {
                    $model->texts[$n++] = null !== $item ? texts::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
