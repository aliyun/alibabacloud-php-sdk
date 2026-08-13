<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class UploadChatFileResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $filePublicUrl;

    /**
     * @var string
     */
    public $fileRecordId;

    /**
     * @var string
     */
    public $fileUrl;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $objectName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $uploadSignatureUrl;
    protected $_name = [
        'code' => 'code',
        'contentType' => 'contentType',
        'fileName' => 'fileName',
        'filePublicUrl' => 'filePublicUrl',
        'fileRecordId' => 'fileRecordId',
        'fileUrl' => 'fileUrl',
        'message' => 'message',
        'objectName' => 'objectName',
        'requestId' => 'requestId',
        'uploadSignatureUrl' => 'uploadSignatureUrl',
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

        if (null !== $this->contentType) {
            $res['contentType'] = $this->contentType;
        }

        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }

        if (null !== $this->filePublicUrl) {
            $res['filePublicUrl'] = $this->filePublicUrl;
        }

        if (null !== $this->fileRecordId) {
            $res['fileRecordId'] = $this->fileRecordId;
        }

        if (null !== $this->fileUrl) {
            $res['fileUrl'] = $this->fileUrl;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->objectName) {
            $res['objectName'] = $this->objectName;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->uploadSignatureUrl) {
            $res['uploadSignatureUrl'] = $this->uploadSignatureUrl;
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

        if (isset($map['contentType'])) {
            $model->contentType = $map['contentType'];
        }

        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }

        if (isset($map['filePublicUrl'])) {
            $model->filePublicUrl = $map['filePublicUrl'];
        }

        if (isset($map['fileRecordId'])) {
            $model->fileRecordId = $map['fileRecordId'];
        }

        if (isset($map['fileUrl'])) {
            $model->fileUrl = $map['fileUrl'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['objectName'])) {
            $model->objectName = $map['objectName'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['uploadSignatureUrl'])) {
            $model->uploadSignatureUrl = $map['uploadSignatureUrl'];
        }

        return $model;
    }
}
