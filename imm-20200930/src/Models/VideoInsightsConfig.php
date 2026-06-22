<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class VideoInsightsConfig extends Model
{
    /**
     * @var VideoInsightsCaptionConfig
     */
    public $caption;

    /**
     * @var VideoInsightsLabelConfig
     */
    public $label;

    /**
     * @var VideoInsightsMultiStreamConfig
     */
    public $multiStream;
    protected $_name = [
        'caption' => 'Caption',
        'label' => 'Label',
        'multiStream' => 'MultiStream',
    ];

    public function validate()
    {
        if (null !== $this->caption) {
            $this->caption->validate();
        }
        if (null !== $this->label) {
            $this->label->validate();
        }
        if (null !== $this->multiStream) {
            $this->multiStream->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->caption) {
            $res['Caption'] = null !== $this->caption ? $this->caption->toArray($noStream) : $this->caption;
        }

        if (null !== $this->label) {
            $res['Label'] = null !== $this->label ? $this->label->toArray($noStream) : $this->label;
        }

        if (null !== $this->multiStream) {
            $res['MultiStream'] = null !== $this->multiStream ? $this->multiStream->toArray($noStream) : $this->multiStream;
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
        if (isset($map['Caption'])) {
            $model->caption = VideoInsightsCaptionConfig::fromMap($map['Caption']);
        }

        if (isset($map['Label'])) {
            $model->label = VideoInsightsLabelConfig::fromMap($map['Label']);
        }

        if (isset($map['MultiStream'])) {
            $model->multiStream = VideoInsightsMultiStreamConfig::fromMap($map['MultiStream']);
        }

        return $model;
    }
}
