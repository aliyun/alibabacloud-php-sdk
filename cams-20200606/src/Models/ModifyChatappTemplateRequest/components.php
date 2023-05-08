<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ModifyChatappTemplateRequest;

use AlibabaCloud\SDK\Cams\V20200606\Models\ModifyChatappTemplateRequest\components\buttons;
use AlibabaCloud\Tea\Model;

class components extends Model
{
    /**
     * @var bool
     */
    public $addSecretRecommendation;

    /**
     * @var buttons[]
     */
    public $buttons;

    /**
     * @example 这是一个视频
     *
     * @var string
     */
    public $caption;

    /**
     * @example 5
     *
     * @var int
     */
    public $codeExpirationMinutes;

    /**
     * @example 120
     *
     * @var int
     */
    public $duration;

    /**
     * @example 视频
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
     * @example TEXT
     *
     * @var string
     */
    public $format;

    /**
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
     * @example BODY
     *
     * @var string
     */
    public $type;

    /**
     * @example https://img.tukuppt.com/png_preview/00/10/24/1GygxVK3F4.jpg
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'addSecretRecommendation' => 'AddSecretRecommendation',
        'buttons'                 => 'Buttons',
        'caption'                 => 'Caption',
        'codeExpirationMinutes'   => 'CodeExpirationMinutes',
        'duration'                => 'Duration',
        'fileName'                => 'FileName',
        'fileType'                => 'FileType',
        'format'                  => 'Format',
        'text'                    => 'Text',
        'thumbUrl'                => 'ThumbUrl',
        'type'                    => 'Type',
        'url'                     => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addSecretRecommendation) {
            $res['AddSecretRecommendation'] = $this->addSecretRecommendation;
        }
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
        if (null !== $this->codeExpirationMinutes) {
            $res['CodeExpirationMinutes'] = $this->codeExpirationMinutes;
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
        if (isset($map['AddSecretRecommendation'])) {
            $model->addSecretRecommendation = $map['AddSecretRecommendation'];
        }
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
        if (isset($map['CodeExpirationMinutes'])) {
            $model->codeExpirationMinutes = $map['CodeExpirationMinutes'];
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
