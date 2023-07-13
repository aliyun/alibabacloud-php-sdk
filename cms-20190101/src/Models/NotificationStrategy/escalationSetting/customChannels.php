<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\NotificationStrategy\escalationSetting;

use AlibabaCloud\Tea\Model;

class customChannels extends Model
{
    /**
     * @var string
     */
    public $channelType;

    /**
     * @var string[]
     */
    public $severities;

    /**
     * @var string
     */
    public $templateUuid;
    protected $_name = [
        'channelType'  => 'ChannelType',
        'severities'   => 'Severities',
        'templateUuid' => 'TemplateUuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelType) {
            $res['ChannelType'] = $this->channelType;
        }
        if (null !== $this->severities) {
            $res['Severities'] = $this->severities;
        }
        if (null !== $this->templateUuid) {
            $res['TemplateUuid'] = $this->templateUuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customChannels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelType'])) {
            $model->channelType = $map['ChannelType'];
        }
        if (isset($map['Severities'])) {
            if (!empty($map['Severities'])) {
                $model->severities = $map['Severities'];
            }
        }
        if (isset($map['TemplateUuid'])) {
            $model->templateUuid = $map['TemplateUuid'];
        }

        return $model;
    }
}
