<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetAssetDownloadUrlResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $assetId;

    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var string
     */
    public $expiresAt;

    /**
     * @var string
     */
    public $fileName;
    protected $_name = [
        'assetId' => 'assetId',
        'contentType' => 'contentType',
        'downloadUrl' => 'downloadUrl',
        'expiresAt' => 'expiresAt',
        'fileName' => 'fileName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetId) {
            $res['assetId'] = $this->assetId;
        }

        if (null !== $this->contentType) {
            $res['contentType'] = $this->contentType;
        }

        if (null !== $this->downloadUrl) {
            $res['downloadUrl'] = $this->downloadUrl;
        }

        if (null !== $this->expiresAt) {
            $res['expiresAt'] = $this->expiresAt;
        }

        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
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
        if (isset($map['assetId'])) {
            $model->assetId = $map['assetId'];
        }

        if (isset($map['contentType'])) {
            $model->contentType = $map['contentType'];
        }

        if (isset($map['downloadUrl'])) {
            $model->downloadUrl = $map['downloadUrl'];
        }

        if (isset($map['expiresAt'])) {
            $model->expiresAt = $map['expiresAt'];
        }

        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }

        return $model;
    }
}
