<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class VideoInsightsLabelConfig extends Model
{
    /**
     * @var VideoInsightsHighlightLabelConfig
     */
    public $highlight;

    /**
     * @var VideoInsightsSystemLabelConfig
     */
    public $system;

    /**
     * @var VideoInsightsUserDefinedLabelConfig
     */
    public $userDefined;
    protected $_name = [
        'highlight' => 'Highlight',
        'system' => 'System',
        'userDefined' => 'UserDefined',
    ];

    public function validate()
    {
        if (null !== $this->highlight) {
            $this->highlight->validate();
        }
        if (null !== $this->system) {
            $this->system->validate();
        }
        if (null !== $this->userDefined) {
            $this->userDefined->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->highlight) {
            $res['Highlight'] = null !== $this->highlight ? $this->highlight->toArray($noStream) : $this->highlight;
        }

        if (null !== $this->system) {
            $res['System'] = null !== $this->system ? $this->system->toArray($noStream) : $this->system;
        }

        if (null !== $this->userDefined) {
            $res['UserDefined'] = null !== $this->userDefined ? $this->userDefined->toArray($noStream) : $this->userDefined;
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
        if (isset($map['Highlight'])) {
            $model->highlight = VideoInsightsHighlightLabelConfig::fromMap($map['Highlight']);
        }

        if (isset($map['System'])) {
            $model->system = VideoInsightsSystemLabelConfig::fromMap($map['System']);
        }

        if (isset($map['UserDefined'])) {
            $model->userDefined = VideoInsightsUserDefinedLabelConfig::fromMap($map['UserDefined']);
        }

        return $model;
    }
}
