<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\ListVoicesResponseBody\data;

use AlibabaCloud\Dara\Model;

class voices extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nlsEngine;

    /**
     * @var string
     */
    public $style;

    /**
     * @var string[]
     */
    public $supportedParams;

    /**
     * @var string
     */
    public $voice;
    protected $_name = [
        'category' => 'Category',
        'language' => 'Language',
        'model' => 'Model',
        'name' => 'Name',
        'nlsEngine' => 'NlsEngine',
        'style' => 'Style',
        'supportedParams' => 'SupportedParams',
        'voice' => 'Voice',
    ];

    public function validate()
    {
        if (\is_array($this->supportedParams)) {
            Model::validateArray($this->supportedParams);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nlsEngine) {
            $res['NlsEngine'] = $this->nlsEngine;
        }

        if (null !== $this->style) {
            $res['Style'] = $this->style;
        }

        if (null !== $this->supportedParams) {
            if (\is_array($this->supportedParams)) {
                $res['SupportedParams'] = [];
                $n1 = 0;
                foreach ($this->supportedParams as $item1) {
                    $res['SupportedParams'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->voice) {
            $res['Voice'] = $this->voice;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NlsEngine'])) {
            $model->nlsEngine = $map['NlsEngine'];
        }

        if (isset($map['Style'])) {
            $model->style = $map['Style'];
        }

        if (isset($map['SupportedParams'])) {
            if (!empty($map['SupportedParams'])) {
                $model->supportedParams = [];
                $n1 = 0;
                foreach ($map['SupportedParams'] as $item1) {
                    $model->supportedParams[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Voice'])) {
            $model->voice = $map['Voice'];
        }

        return $model;
    }
}
