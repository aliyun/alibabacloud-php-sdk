<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ModifyChatappTemplateRequest\components\cards;

use AlibabaCloud\SDK\Cams\V20200606\Models\ModifyChatappTemplateRequest\components\cards\cardComponents\buttons;
use AlibabaCloud\Tea\Model;

class cardComponents extends Model
{
    /**
     * @var buttons[]
     */
    public $buttons;

    /**
     * @example IMAGE
     *
     * @var string
     */
    public $format;

    /**
     * @example Who is the very powerful team
     *
     * @var string
     */
    public $text;

    /**
     * @description This parameter is required.
     *
     * @example BODY
     *
     * @var string
     */
    public $type;

    /**
     * @example https://alibaba.com/img.png
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'buttons' => 'Buttons',
        'format'  => 'Format',
        'text'    => 'Text',
        'type'    => 'Type',
        'url'     => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buttons) {
            $res['Buttons'] = [];
            if (null !== $this->buttons && \is_array($this->buttons)) {
                $n = 0;
                foreach ($this->buttons as $item) {
                    $res['Buttons'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return cardComponents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Buttons'])) {
            if (!empty($map['Buttons'])) {
                $model->buttons = [];
                $n              = 0;
                foreach ($map['Buttons'] as $item) {
                    $model->buttons[$n++] = null !== $item ? buttons::fromMap($item) : $item;
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
