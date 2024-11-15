<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\CreateChatappTemplateRequest\components\cards;

use AlibabaCloud\SDK\Cams\V20200606\Models\CreateChatappTemplateRequest\components\cards\cardComponents\buttons;
use AlibabaCloud\Tea\Model;

class cardComponents extends Model
{
    /**
     * @description The buttons. Specify this parameter only if you set the Type sub-parameter of the CardComponents parameter to BUTTONS. A carousel card can contain up to two buttons.
     *
     * @var buttons[]
     */
    public $buttons;

    /**
     * @description The type of the media resource. This parameter is valid if the Type sub-parameter of the CardComponents parameter is set to HEADER. Valid values:
     *
     *   **IMAGE**
     *   **VIDEO**
     *
     * @example IMAGE
     *
     * @var string
     */
    public $format;

    /**
     * @description The body content of the carousel card.
     *
     * @example Who is the very powerful team
     *
     * @var string
     */
    public $text;

    /**
     * @description The type of the component. Valid values:
     *
     *   **BODY**
     *   **HEADER**
     *   **BUTTONS**
     *
     * This parameter is required.
     * @example BODY
     *
     * @var string
     */
    public $type;

    /**
     * @description The URL of the media resource.
     *
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
