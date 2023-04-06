<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\SDK\Pds\V20220301\Models\UploadPartInfo\parallelSha1Ctx;
use AlibabaCloud\Tea\Model;

class UploadPartInfo extends Model
{
    /**
     * @example 0CC175B9C0F1B6A831C399E269772661
     *
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
     * @example 1
     *
     * @var int
     */
    public $partNumber;

    /**
     * @example 1024
     *
     * @var int
     */
    public $partSize;

    /**
     * @var string
     */
    public $uploadUrl;
    protected $_name = [
        'etag'              => 'etag',
        'internalUploadUrl' => 'internal_upload_url',
        'parallelSha1Ctx'   => 'parallel_sha1_ctx',
        'partNumber'        => 'part_number',
        'partSize'          => 'part_size',
        'uploadUrl'         => 'upload_url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->etag) {
            $res['etag'] = $this->etag;
        }
        if (null !== $this->internalUploadUrl) {
            $res['internal_upload_url'] = $this->internalUploadUrl;
        }
        if (null !== $this->parallelSha1Ctx) {
            $res['parallel_sha1_ctx'] = null !== $this->parallelSha1Ctx ? $this->parallelSha1Ctx->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return UploadPartInfo
     */
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
