<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models\GetUploadUrlRequest;

use AlibabaCloud\SDK\Pds\V20220301\Models\GetUploadUrlRequest\partInfoList\parallelSha1Ctx;
use AlibabaCloud\Tea\Model;

class partInfoList extends Model
{
    /**
     * @var string
     */
    public $contentMd5;

    /**
     * @var string
     */
    public $contentType;

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
    protected $_name = [
        'contentMd5'      => 'content_md5',
        'contentType'     => 'content_type',
        'parallelSha1Ctx' => 'parallel_sha1_ctx',
        'partNumber'      => 'part_number',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contentMd5) {
            $res['content_md5'] = $this->contentMd5;
        }
        if (null !== $this->contentType) {
            $res['content_type'] = $this->contentType;
        }
        if (null !== $this->parallelSha1Ctx) {
            $res['parallel_sha1_ctx'] = null !== $this->parallelSha1Ctx ? $this->parallelSha1Ctx->toMap() : null;
        }
        if (null !== $this->partNumber) {
            $res['part_number'] = $this->partNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return partInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content_md5'])) {
            $model->contentMd5 = $map['content_md5'];
        }
        if (isset($map['content_type'])) {
            $model->contentType = $map['content_type'];
        }
        if (isset($map['parallel_sha1_ctx'])) {
            $model->parallelSha1Ctx = parallelSha1Ctx::fromMap($map['parallel_sha1_ctx']);
        }
        if (isset($map['part_number'])) {
            $model->partNumber = $map['part_number'];
        }

        return $model;
    }
}
