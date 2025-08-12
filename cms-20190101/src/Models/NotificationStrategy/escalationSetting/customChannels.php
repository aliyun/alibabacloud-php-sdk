<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\NotificationStrategy\escalationSetting;

use AlibabaCloud\Dara\Model;

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
        'channelType' => 'ChannelType',
        'severities' => 'Severities',
        'templateUuid' => 'TemplateUuid',
    ];

    public function validate()
    {
        if (\is_array($this->severities)) {
            Model::validateArray($this->severities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelType) {
            $res['ChannelType'] = $this->channelType;
        }

        if (null !== $this->severities) {
            if (\is_array($this->severities)) {
                $res['Severities'] = [];
                $n1 = 0;
                foreach ($this->severities as $item1) {
                    $res['Severities'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->templateUuid) {
            $res['TemplateUuid'] = $this->templateUuid;
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
        if (isset($map['ChannelType'])) {
            $model->channelType = $map['ChannelType'];
        }

        if (isset($map['Severities'])) {
            if (!empty($map['Severities'])) {
                $model->severities = [];
                $n1 = 0;
                foreach ($map['Severities'] as $item1) {
                    $model->severities[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TemplateUuid'])) {
            $model->templateUuid = $map['TemplateUuid'];
        }

        return $model;
    }
}
