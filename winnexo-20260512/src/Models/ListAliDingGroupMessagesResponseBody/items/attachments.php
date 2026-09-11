<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\ListAliDingGroupMessagesResponseBody\items;

use AlibabaCloud\Dara\Model;

class attachments extends Model
{
    /**
     * @var string
     */
    public $attachmentId;

    /**
     * @var string
     */
    public $attachmentType;

    /**
     * @var int
     */
    public $durationMs;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var int
     */
    public $fileSize;

    /**
     * @var int
     */
    public $height;

    /**
     * @var string
     */
    public $mimeType;

    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'attachmentId' => 'attachmentId',
        'attachmentType' => 'attachmentType',
        'durationMs' => 'durationMs',
        'fileName' => 'fileName',
        'fileSize' => 'fileSize',
        'height' => 'height',
        'mimeType' => 'mimeType',
        'width' => 'width',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachmentId) {
            $res['attachmentId'] = $this->attachmentId;
        }

        if (null !== $this->attachmentType) {
            $res['attachmentType'] = $this->attachmentType;
        }

        if (null !== $this->durationMs) {
            $res['durationMs'] = $this->durationMs;
        }

        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }

        if (null !== $this->fileSize) {
            $res['fileSize'] = $this->fileSize;
        }

        if (null !== $this->height) {
            $res['height'] = $this->height;
        }

        if (null !== $this->mimeType) {
            $res['mimeType'] = $this->mimeType;
        }

        if (null !== $this->width) {
            $res['width'] = $this->width;
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
        if (isset($map['attachmentId'])) {
            $model->attachmentId = $map['attachmentId'];
        }

        if (isset($map['attachmentType'])) {
            $model->attachmentType = $map['attachmentType'];
        }

        if (isset($map['durationMs'])) {
            $model->durationMs = $map['durationMs'];
        }

        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }

        if (isset($map['fileSize'])) {
            $model->fileSize = $map['fileSize'];
        }

        if (isset($map['height'])) {
            $model->height = $map['height'];
        }

        if (isset($map['mimeType'])) {
            $model->mimeType = $map['mimeType'];
        }

        if (isset($map['width'])) {
            $model->width = $map['width'];
        }

        return $model;
    }
}
