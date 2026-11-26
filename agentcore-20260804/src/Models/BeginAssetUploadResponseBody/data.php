<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\BeginAssetUploadResponseBody;

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
    public $expiresAt;

    /**
     * @var string[]
     */
    public $headers;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $uploadId;

    /**
     * @var string
     */
    public $uploadUrl;
    protected $_name = [
        'assetId' => 'assetId',
        'contentType' => 'contentType',
        'expiresAt' => 'expiresAt',
        'headers' => 'headers',
        'status' => 'status',
        'uploadId' => 'uploadId',
        'uploadUrl' => 'uploadUrl',
    ];

    public function validate()
    {
        if (\is_array($this->headers)) {
            Model::validateArray($this->headers);
        }
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

        if (null !== $this->expiresAt) {
            $res['expiresAt'] = $this->expiresAt;
        }

        if (null !== $this->headers) {
            if (\is_array($this->headers)) {
                $res['headers'] = [];
                foreach ($this->headers as $key1 => $value1) {
                    $res['headers'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->uploadId) {
            $res['uploadId'] = $this->uploadId;
        }

        if (null !== $this->uploadUrl) {
            $res['uploadUrl'] = $this->uploadUrl;
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

        if (isset($map['expiresAt'])) {
            $model->expiresAt = $map['expiresAt'];
        }

        if (isset($map['headers'])) {
            if (!empty($map['headers'])) {
                $model->headers = [];
                foreach ($map['headers'] as $key1 => $value1) {
                    $model->headers[$key1] = $value1;
                }
            }
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['uploadId'])) {
            $model->uploadId = $map['uploadId'];
        }

        if (isset($map['uploadUrl'])) {
            $model->uploadUrl = $map['uploadUrl'];
        }

        return $model;
    }
}
