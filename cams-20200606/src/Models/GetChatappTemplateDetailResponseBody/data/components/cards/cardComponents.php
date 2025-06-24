<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappTemplateDetailResponseBody\data\components\cards;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetChatappTemplateDetailResponseBody\data\components\cards\cardComponents\buttons;

class cardComponents extends Model
{
    /**
     * @var buttons[]
     */
    public $buttons;

    /**
     * @var string
     */
    public $format;

    /**
     * @var string
     */
    public $text;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'buttons' => 'Buttons',
        'format' => 'Format',
        'text' => 'Text',
        'type' => 'Type',
        'url' => 'Url',
    ];

    public function validate()
    {
        if (\is_array($this->buttons)) {
            Model::validateArray($this->buttons);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buttons) {
            if (\is_array($this->buttons)) {
                $res['Buttons'] = [];
                $n1 = 0;
                foreach ($this->buttons as $item1) {
                    $res['Buttons'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }

        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['Buttons'])) {
            if (!empty($map['Buttons'])) {
                $model->buttons = [];
                $n1 = 0;
                foreach ($map['Buttons'] as $item1) {
                    $model->buttons[$n1] = buttons::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }

        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
