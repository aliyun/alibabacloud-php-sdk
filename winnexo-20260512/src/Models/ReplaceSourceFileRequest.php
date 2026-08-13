<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class ReplaceSourceFileRequest extends Model
{
    /**
     * @var string
     */
    public $fileName;

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
     * @var bool
     */
    public $forceSync;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'fileName' => 'fileName',
        'filePath' => 'filePath',
        'filePublicUrl' => 'filePublicUrl',
        'fileRecordId' => 'fileRecordId',
        'forceSync' => 'forceSync',
        'sourceId' => 'sourceId',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
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

        if (null !== $this->forceSync) {
            $res['forceSync'] = $this->forceSync;
        }

        if (null !== $this->sourceId) {
            $res['sourceId'] = $this->sourceId;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
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
        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
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

        if (isset($map['forceSync'])) {
            $model->forceSync = $map['forceSync'];
        }

        if (isset($map['sourceId'])) {
            $model->sourceId = $map['sourceId'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
