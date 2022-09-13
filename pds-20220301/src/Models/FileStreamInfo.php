<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class FileStreamInfo extends Model
{
    /**
     * @var string
     */
    public $contentHash;

    /**
     * @var string
     */
    public $contentHashName;

    /**
     * @var string
     */
    public $contentMd5;

    /**
     * @var UploadPartInfo
     */
    public $partInfoList;

    /**
     * @var string
     */
    public $preHash;

    /**
     * @var string
     */
    public $proofCode;

    /**
     * @var string
     */
    public $proofVersion;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'contentHash'     => 'content_hash',
        'contentHashName' => 'content_hash_name',
        'contentMd5'      => 'content_md5',
        'partInfoList'    => 'part_info_list',
        'preHash'         => 'pre_hash',
        'proofCode'       => 'proof_code',
        'proofVersion'    => 'proof_version',
        'size'            => 'size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contentHash) {
            $res['content_hash'] = $this->contentHash;
        }
        if (null !== $this->contentHashName) {
            $res['content_hash_name'] = $this->contentHashName;
        }
        if (null !== $this->contentMd5) {
            $res['content_md5'] = $this->contentMd5;
        }
        if (null !== $this->partInfoList) {
            $res['part_info_list'] = null !== $this->partInfoList ? $this->partInfoList->toMap() : null;
        }
        if (null !== $this->preHash) {
            $res['pre_hash'] = $this->preHash;
        }
        if (null !== $this->proofCode) {
            $res['proof_code'] = $this->proofCode;
        }
        if (null !== $this->proofVersion) {
            $res['proof_version'] = $this->proofVersion;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FileStreamInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content_hash'])) {
            $model->contentHash = $map['content_hash'];
        }
        if (isset($map['content_hash_name'])) {
            $model->contentHashName = $map['content_hash_name'];
        }
        if (isset($map['content_md5'])) {
            $model->contentMd5 = $map['content_md5'];
        }
        if (isset($map['part_info_list'])) {
            $model->partInfoList = UploadPartInfo::fromMap($map['part_info_list']);
        }
        if (isset($map['pre_hash'])) {
            $model->preHash = $map['pre_hash'];
        }
        if (isset($map['proof_code'])) {
            $model->proofCode = $map['proof_code'];
        }
        if (isset($map['proof_version'])) {
            $model->proofVersion = $map['proof_version'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        return $model;
    }
}
