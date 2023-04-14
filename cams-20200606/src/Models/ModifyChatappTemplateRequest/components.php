<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ModifyChatappTemplateRequest;

use AlibabaCloud\SDK\Cams\V20200606\Models\ModifyChatappTemplateRequest\components\buttons;
use AlibabaCloud\Tea\Model;

class components extends Model
{
    /**
     * @description The buttons. This parameter is applicable only to components of the **BUTTONS** type.
     *
     * @var buttons[]
     */
    public $buttons;

    /**
     * @description The description.
     *
     * > When the Type parameter is set to **HEADER** and the Format parameter is set to **IMAGE, DOCUMENT, or VIDEO**, you can specify a description.
     * @example This is a video.
     *
     * @var string
     */
    public $caption;

    /**
     * @example 120
     *
     * @var int
     */
    public $duration;

    /**
     * @description The name of the file.
     *
     * > When the Type parameter is set to **HEADER** and the Format parameter is set to **DOCUMENT**, you can specify a name for the file.
     * @example Video
     *
     * @var string
     */
    public $fileName;

    /**
     * @example docx
     *
     * @var string
     */
    public $fileType;

    /**
     * @description The type of the media resources that are included in the message.
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
     * @example https://cdn.multiplymall.mobiapp.cloud/cloudcode/yc-165407506207478-165511576113195/20220905/ec5b9737-1507-4208-bb27-8da3958da961.jpg?x-oss-process=image/resize,w_100
     *
     * @var string
     */
    public $thumbUrl;

    /**
     * @description The type of the component. Valid values:
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
     * @example https://img.tukuppt.com/png_preview/00/10/24/1GygxVK3F4.jpg
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'buttons'  => 'Buttons',
        'caption'  => 'Caption',
        'duration' => 'Duration',
        'fileName' => 'FileName',
        'fileType' => 'FileType',
        'format'   => 'Format',
        'text'     => 'Text',
        'thumbUrl' => 'ThumbUrl',
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
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->thumbUrl) {
            $res['ThumbUrl'] = $this->thumbUrl;
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
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['ThumbUrl'])) {
            $model->thumbUrl = $map['ThumbUrl'];
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
