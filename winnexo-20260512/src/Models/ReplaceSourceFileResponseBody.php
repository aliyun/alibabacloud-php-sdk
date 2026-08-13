<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class ReplaceSourceFileResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $filePath;

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
    public $message;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'code' => 'code',
        'filePath' => 'filePath',
        'filePublicUrl' => 'filePublicUrl',
        'fileRecordId' => 'fileRecordId',
        'message' => 'message',
        'name' => 'name',
        'requestId' => 'requestId',
        'sourceId' => 'sourceId',
        'sourceType' => 'sourceType',
        'status' => 'status',
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

        if (null !== $this->filePath) {
            $res['filePath'] = $this->filePath;
        }

        if (null !== $this->filePublicUrl) {
            $res['filePublicUrl'] = $this->filePublicUrl;
        }

        if (null !== $this->fileRecordId) {
            $res['fileRecordId'] = $this->fileRecordId;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->sourceId) {
            $res['sourceId'] = $this->sourceId;
        }

        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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

        if (isset($map['filePath'])) {
            $model->filePath = $map['filePath'];
        }

        if (isset($map['filePublicUrl'])) {
            $model->filePublicUrl = $map['filePublicUrl'];
        }

        if (isset($map['fileRecordId'])) {
            $model->fileRecordId = $map['fileRecordId'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['sourceId'])) {
            $model->sourceId = $map['sourceId'];
        }

        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
