<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class CreatePersonalFileRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $directoryId;

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
    public $name;

    /**
     * @var string
     */
    public $operatingObjectName;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'description' => 'description',
        'directoryId' => 'directoryId',
        'fileExt' => 'fileExt',
        'fileName' => 'fileName',
        'filePath' => 'filePath',
        'filePublicUrl' => 'filePublicUrl',
        'fileRecordId' => 'fileRecordId',
        'name' => 'name',
        'operatingObjectName' => 'operatingObjectName',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->directoryId) {
            $res['directoryId'] = $this->directoryId;
        }

        if (null !== $this->fileExt) {
            $res['fileExt'] = $this->fileExt;
        }

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

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->operatingObjectName) {
            $res['operatingObjectName'] = $this->operatingObjectName;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['directoryId'])) {
            $model->directoryId = $map['directoryId'];
        }

        if (isset($map['fileExt'])) {
            $model->fileExt = $map['fileExt'];
        }

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

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['operatingObjectName'])) {
            $model->operatingObjectName = $map['operatingObjectName'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
