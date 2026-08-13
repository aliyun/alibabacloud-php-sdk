<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class PreviewKnowledgeBaseSourceResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $fileExt;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $previewType;

    /**
     * @var string
     */
    public $previewUrl;

    /**
     * @var string
     */
    public $publicUrl;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code' => 'code',
        'content' => 'content',
        'fileExt' => 'fileExt',
        'fileName' => 'fileName',
        'message' => 'message',
        'previewType' => 'previewType',
        'previewUrl' => 'previewUrl',
        'publicUrl' => 'publicUrl',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->fileExt) {
            $res['fileExt'] = $this->fileExt;
        }

        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->previewType) {
            $res['previewType'] = $this->previewType;
        }

        if (null !== $this->previewUrl) {
            $res['previewUrl'] = $this->previewUrl;
        }

        if (null !== $this->publicUrl) {
            $res['publicUrl'] = $this->publicUrl;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['fileExt'])) {
            $model->fileExt = $map['fileExt'];
        }

        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['previewType'])) {
            $model->previewType = $map['previewType'];
        }

        if (isset($map['previewUrl'])) {
            $model->previewUrl = $map['previewUrl'];
        }

        if (isset($map['publicUrl'])) {
            $model->publicUrl = $map['publicUrl'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
