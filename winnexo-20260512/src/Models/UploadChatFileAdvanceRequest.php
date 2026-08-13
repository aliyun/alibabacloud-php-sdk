<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class UploadChatFileAdvanceRequest extends Model
{
    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var Stream
     */
    public $fileUrlObject;

    /**
     * @var string
     */
    public $operatingObjectName;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'contentType' => 'contentType',
        'fileName' => 'fileName',
        'fileUrlObject' => 'fileUrl',
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
        if (null !== $this->contentType) {
            $res['contentType'] = $this->contentType;
        }

        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }

        if (null !== $this->fileUrlObject) {
            $res['fileUrl'] = $this->fileUrlObject;
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
        if (isset($map['contentType'])) {
            $model->contentType = $map['contentType'];
        }

        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }

        if (isset($map['fileUrl'])) {
            $model->fileUrlObject = $map['fileUrl'];
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
