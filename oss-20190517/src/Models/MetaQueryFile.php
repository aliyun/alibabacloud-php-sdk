<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\SDK\Oss\V20190517\Models\MetaQueryFile\OSSTagging;
use AlibabaCloud\SDK\Oss\V20190517\Models\MetaQueryFile\OSSUserMeta;
use AlibabaCloud\Tea\Model;

class MetaQueryFile extends Model
{
    /**
     * @var string
     */
    public $ETag;

    /**
     * @var string
     */
    public $fileModifiedTime;

    /**
     * @var string
     */
    public $filename;

    /**
     * @var string
     */
    public $OSSCRC64;

    /**
     * @var string
     */
    public $OSSObjectType;

    /**
     * @var string
     */
    public $OSSStorageClass;

    /**
     * @var OSSTagging
     */
    public $OSSTagging;

    /**
     * @var int
     */
    public $OSSTaggingCount;

    /**
     * @var OSSUserMeta
     */
    public $OSSUserMeta;

    /**
     * @var string
     */
    public $objectACL;

    /**
     * @var string
     */
    public $serverSideEncryption;

    /**
     * @var string
     */
    public $serverSideEncryptionCustomerAlgorithm;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'ETag'                                  => 'ETag',
        'fileModifiedTime'                      => 'FileModifiedTime',
        'filename'                              => 'Filename',
        'OSSCRC64'                              => 'OSSCRC64',
        'OSSObjectType'                         => 'OSSObjectType',
        'OSSStorageClass'                       => 'OSSStorageClass',
        'OSSTagging'                            => 'OSSTagging',
        'OSSTaggingCount'                       => 'OSSTaggingCount',
        'OSSUserMeta'                           => 'OSSUserMeta',
        'objectACL'                             => 'ObjectACL',
        'serverSideEncryption'                  => 'ServerSideEncryption',
        'serverSideEncryptionCustomerAlgorithm' => 'ServerSideEncryptionCustomerAlgorithm',
        'size'                                  => 'Size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ETag) {
            $res['ETag'] = $this->ETag;
        }
        if (null !== $this->fileModifiedTime) {
            $res['FileModifiedTime'] = $this->fileModifiedTime;
        }
        if (null !== $this->filename) {
            $res['Filename'] = $this->filename;
        }
        if (null !== $this->OSSCRC64) {
            $res['OSSCRC64'] = $this->OSSCRC64;
        }
        if (null !== $this->OSSObjectType) {
            $res['OSSObjectType'] = $this->OSSObjectType;
        }
        if (null !== $this->OSSStorageClass) {
            $res['OSSStorageClass'] = $this->OSSStorageClass;
        }
        if (null !== $this->OSSTagging) {
            $res['OSSTagging'] = null !== $this->OSSTagging ? $this->OSSTagging->toMap() : null;
        }
        if (null !== $this->OSSTaggingCount) {
            $res['OSSTaggingCount'] = $this->OSSTaggingCount;
        }
        if (null !== $this->OSSUserMeta) {
            $res['OSSUserMeta'] = null !== $this->OSSUserMeta ? $this->OSSUserMeta->toMap() : null;
        }
        if (null !== $this->objectACL) {
            $res['ObjectACL'] = $this->objectACL;
        }
        if (null !== $this->serverSideEncryption) {
            $res['ServerSideEncryption'] = $this->serverSideEncryption;
        }
        if (null !== $this->serverSideEncryptionCustomerAlgorithm) {
            $res['ServerSideEncryptionCustomerAlgorithm'] = $this->serverSideEncryptionCustomerAlgorithm;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MetaQueryFile
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ETag'])) {
            $model->ETag = $map['ETag'];
        }
        if (isset($map['FileModifiedTime'])) {
            $model->fileModifiedTime = $map['FileModifiedTime'];
        }
        if (isset($map['Filename'])) {
            $model->filename = $map['Filename'];
        }
        if (isset($map['OSSCRC64'])) {
            $model->OSSCRC64 = $map['OSSCRC64'];
        }
        if (isset($map['OSSObjectType'])) {
            $model->OSSObjectType = $map['OSSObjectType'];
        }
        if (isset($map['OSSStorageClass'])) {
            $model->OSSStorageClass = $map['OSSStorageClass'];
        }
        if (isset($map['OSSTagging'])) {
            $model->OSSTagging = OSSTagging::fromMap($map['OSSTagging']);
        }
        if (isset($map['OSSTaggingCount'])) {
            $model->OSSTaggingCount = $map['OSSTaggingCount'];
        }
        if (isset($map['OSSUserMeta'])) {
            $model->OSSUserMeta = OSSUserMeta::fromMap($map['OSSUserMeta']);
        }
        if (isset($map['ObjectACL'])) {
            $model->objectACL = $map['ObjectACL'];
        }
        if (isset($map['ServerSideEncryption'])) {
            $model->serverSideEncryption = $map['ServerSideEncryption'];
        }
        if (isset($map['ServerSideEncryptionCustomerAlgorithm'])) {
            $model->serverSideEncryptionCustomerAlgorithm = $map['ServerSideEncryptionCustomerAlgorithm'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
