<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ModifyChatappTemplateRequest;

use AlibabaCloud\SDK\Cams\V20200606\Models\ModifyChatappTemplateRequest\components\buttons;
use AlibabaCloud\Tea\Model;

class components extends Model
{
    /**
     * @description The list of buttons, which applies only to the **BUTTONS** component.
     *
     * @var buttons[]
     */
    public $buttons;

    /**
     * @description The description.
     *
     * >  When the Type parameter is set to **HEADER** and the Format parameter is set to **IMAGE/DOCUMENT/VIDEO**, you can specify the description.
     * @example This is a video.
     *
     * @var string
     */
    public $caption;

    /**
     * @description The name of the file.
     *
     * > : When the Type parameter is set to **HEADER** and the Format parameter is set to **DOCUMENT**, you can specify a name of the file.
     * @example Video
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The type of the media resource.
     *
     *   **TEXT**: text
     *   **IMAGE**: image
     *   **DOCUMENT**: document
     *   **VIDEO**: video
     *
     * @example TEXT
     *
     * @var string
     */
    public $format;

    /**
     * @description The text of the message to be sent.
     *
     * @example hello chatapp
     *
     * @var string
     */
    public $text;

    /**
     * @description The type of the component.
     *
     *   **BODY**
     *   **HEADER**
     *   **FOOTER**
     *   **BUTTONS**
     *
     * @example BODY
     *
     * @var string
     */
    public $type;

    /**
     * @description The URL of the material.
     *
     * @example "https://img.tukuppt.com/png_preview/00/10/24/1GygxVK3F4.jpg
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'buttons'  => 'Buttons',
        'caption'  => 'Caption',
        'fileName' => 'FileName',
        'format'   => 'Format',
        'text'     => 'Text',
        'type'     => 'Type',
        'url'      => 'Url',
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
        if (null !== $this->caption) {
            $res['Caption'] = $this->caption;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
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
     * @return components
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
        if (isset($map['Caption'])) {
            $model->caption = $map['Caption'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
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
