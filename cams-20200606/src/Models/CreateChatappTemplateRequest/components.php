<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\CreateChatappTemplateRequest;

use AlibabaCloud\SDK\Cams\V20200606\Models\CreateChatappTemplateRequest\components\buttons;
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
     * @description The description of the file.
     *
     * @example This is a video.
     *
     * @var string
     */
    public $caption;

    /**
     * @description The duration of the video message when the TemplateType parameter is set to VIBER. Valid values: 0 to 600. Unit: seconds.
     *
     * @example 120
     *
     * @var int
     */
    public $duration;

    /**
     * @description The name of the file.
     *
     * @example Express video
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The type of the file when the TemplateType parameter is set to VIBER.
     *
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
     * @description The text of the message that is sent.
     *
     * @example hello whatsapp
     *
     * @var string
     */
    public $text;

    /**
     * @description The thumbnail URL of the video message when the TemplateType parameter is set to VIBER.
     *
     * @example https://cdn.multiplymall.mobiapp.cloud/yunmall/B-LM-LMALL202207130001/20220730/d712a057-a6af-4513-bbe6-7ee57ea60983.png?x-oss-process=image/resize,w_100
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
     * > When the TemplateType parameter is set to WHATSAPP, the component of the **BODY** type cannot exceed 1,024 characters in length. The component of the **HEADER** or **FOOTER** type cannot exceed 60 characters in length.
     *
     * > When the TemplateType parameter is set to VIBER, the **FOOTER** parameter is invalid.
     *
     * > When the TemplateType parameter is set to VIBER, media objects including image, video, and text are placed in the **HEADER** component. A device displays that the image is placed below the text.
     * @example BODY
     *
     * @var string
     */
    public $type;

    /**
     * @description The URL of the material.
     *
     * @example https://image.developer.aliyundoc.com
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
