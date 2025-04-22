<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pds\V20220301\Models\UploadPartInfo\parallelSha1Ctx;
use AlibabaCloud\SDK\Pds\V20220301\Models\UploadPartInfo\parallelSha256Ctx;

class UploadPartInfo extends Model
{
    /**
     * @var string
     */
    public $etag;

    /**
     * @var string
     */
    public $internalUploadUrl;

    /**
     * @var parallelSha1Ctx
     */
    public $parallelSha1Ctx;

    /**
     * @var parallelSha256Ctx
     */
    public $parallelSha256Ctx;

    /**
     * @var int
     */
    public $partNumber;

    /**
     * @var int
     */
    public $partSize;

    /**
     * @var string
     */
    public $uploadUrl;
    protected $_name = [
        'etag' => 'etag',
        'internalUploadUrl' => 'internal_upload_url',
        'parallelSha1Ctx' => 'parallel_sha1_ctx',
        'parallelSha256Ctx' => 'parallel_sha256_ctx',
        'partNumber' => 'part_number',
        'partSize' => 'part_size',
        'uploadUrl' => 'upload_url',
    ];

    public function validate()
    {
        if (null !== $this->parallelSha1Ctx) {
            $this->parallelSha1Ctx->validate();
        }
        if (null !== $this->parallelSha256Ctx) {
            $this->parallelSha256Ctx->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->etag) {
            $res['etag'] = $this->etag;
        }

        if (null !== $this->internalUploadUrl) {
            $res['internal_upload_url'] = $this->internalUploadUrl;
        }

        if (null !== $this->parallelSha1Ctx) {
            $res['parallel_sha1_ctx'] = null !== $this->parallelSha1Ctx ? $this->parallelSha1Ctx->toArray($noStream) : $this->parallelSha1Ctx;
        }

        if (null !== $this->parallelSha256Ctx) {
            $res['parallel_sha256_ctx'] = null !== $this->parallelSha256Ctx ? $this->parallelSha256Ctx->toArray($noStream) : $this->parallelSha256Ctx;
        }

        if (null !== $this->partNumber) {
            $res['part_number'] = $this->partNumber;
        }

        if (null !== $this->partSize) {
            $res['part_size'] = $this->partSize;
        }

        if (null !== $this->uploadUrl) {
            $res['upload_url'] = $this->uploadUrl;
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
        if (isset($map['etag'])) {
            $model->etag = $map['etag'];
        }

        if (isset($map['internal_upload_url'])) {
            $model->internalUploadUrl = $map['internal_upload_url'];
        }

        if (isset($map['parallel_sha1_ctx'])) {
            $model->parallelSha1Ctx = parallelSha1Ctx::fromMap($map['parallel_sha1_ctx']);
        }

        if (isset($map['parallel_sha256_ctx'])) {
            $model->parallelSha256Ctx = parallelSha256Ctx::fromMap($map['parallel_sha256_ctx']);
        }

        if (isset($map['part_number'])) {
            $model->partNumber = $map['part_number'];
        }

        if (isset($map['part_size'])) {
            $model->partSize = $map['part_size'];
        }

        if (isset($map['upload_url'])) {
            $model->uploadUrl = $map['upload_url'];
        }

        return $model;
    }
}
