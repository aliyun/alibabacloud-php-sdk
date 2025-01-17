<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class CreateOssBucketScanTaskRequest extends Model
{
    /**
     * @var bool
     */
    public $allKeyPrefix;
    /**
     * @var string[]
     */
    public $bucketNameList;
    /**
     * @var int
     */
    public $decompressMaxFileCount;
    /**
     * @var int
     */
    public $decompressMaxLayer;
    /**
     * @var string[]
     */
    public $decryptionList;
    /**
     * @var string[]
     */
    public $excludeKeySuffixList;
    /**
     * @var string[]
     */
    public $keyPrefixList;
    /**
     * @var string[]
     */
    public $keySuffixList;
    /**
     * @var int
     */
    public $lastModifiedStartTime;
    /**
     * @var int
     */
    public $scanMode;
    protected $_name = [
        'allKeyPrefix'           => 'AllKeyPrefix',
        'bucketNameList'         => 'BucketNameList',
        'decompressMaxFileCount' => 'DecompressMaxFileCount',
        'decompressMaxLayer'     => 'DecompressMaxLayer',
        'decryptionList'         => 'DecryptionList',
        'excludeKeySuffixList'   => 'ExcludeKeySuffixList',
        'keyPrefixList'          => 'KeyPrefixList',
        'keySuffixList'          => 'KeySuffixList',
        'lastModifiedStartTime'  => 'LastModifiedStartTime',
        'scanMode'               => 'ScanMode',
    ];

    public function validate()
    {
        if (\is_array($this->bucketNameList)) {
            Model::validateArray($this->bucketNameList);
        }
        if (\is_array($this->decryptionList)) {
            Model::validateArray($this->decryptionList);
        }
        if (\is_array($this->excludeKeySuffixList)) {
            Model::validateArray($this->excludeKeySuffixList);
        }
        if (\is_array($this->keyPrefixList)) {
            Model::validateArray($this->keyPrefixList);
        }
        if (\is_array($this->keySuffixList)) {
            Model::validateArray($this->keySuffixList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allKeyPrefix) {
            $res['AllKeyPrefix'] = $this->allKeyPrefix;
        }

        if (null !== $this->bucketNameList) {
            if (\is_array($this->bucketNameList)) {
                $res['BucketNameList'] = [];
                $n1                    = 0;
                foreach ($this->bucketNameList as $item1) {
                    $res['BucketNameList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->decompressMaxFileCount) {
            $res['DecompressMaxFileCount'] = $this->decompressMaxFileCount;
        }

        if (null !== $this->decompressMaxLayer) {
            $res['DecompressMaxLayer'] = $this->decompressMaxLayer;
        }

        if (null !== $this->decryptionList) {
            if (\is_array($this->decryptionList)) {
                $res['DecryptionList'] = [];
                $n1                    = 0;
                foreach ($this->decryptionList as $item1) {
                    $res['DecryptionList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->excludeKeySuffixList) {
            if (\is_array($this->excludeKeySuffixList)) {
                $res['ExcludeKeySuffixList'] = [];
                $n1                          = 0;
                foreach ($this->excludeKeySuffixList as $item1) {
                    $res['ExcludeKeySuffixList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->keyPrefixList) {
            if (\is_array($this->keyPrefixList)) {
                $res['KeyPrefixList'] = [];
                $n1                   = 0;
                foreach ($this->keyPrefixList as $item1) {
                    $res['KeyPrefixList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->keySuffixList) {
            if (\is_array($this->keySuffixList)) {
                $res['KeySuffixList'] = [];
                $n1                   = 0;
                foreach ($this->keySuffixList as $item1) {
                    $res['KeySuffixList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->lastModifiedStartTime) {
            $res['LastModifiedStartTime'] = $this->lastModifiedStartTime;
        }

        if (null !== $this->scanMode) {
            $res['ScanMode'] = $this->scanMode;
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
        if (isset($map['AllKeyPrefix'])) {
            $model->allKeyPrefix = $map['AllKeyPrefix'];
        }

        if (isset($map['BucketNameList'])) {
            if (!empty($map['BucketNameList'])) {
                $model->bucketNameList = [];
                $n1                    = 0;
                foreach ($map['BucketNameList'] as $item1) {
                    $model->bucketNameList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['DecompressMaxFileCount'])) {
            $model->decompressMaxFileCount = $map['DecompressMaxFileCount'];
        }

        if (isset($map['DecompressMaxLayer'])) {
            $model->decompressMaxLayer = $map['DecompressMaxLayer'];
        }

        if (isset($map['DecryptionList'])) {
            if (!empty($map['DecryptionList'])) {
                $model->decryptionList = [];
                $n1                    = 0;
                foreach ($map['DecryptionList'] as $item1) {
                    $model->decryptionList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ExcludeKeySuffixList'])) {
            if (!empty($map['ExcludeKeySuffixList'])) {
                $model->excludeKeySuffixList = [];
                $n1                          = 0;
                foreach ($map['ExcludeKeySuffixList'] as $item1) {
                    $model->excludeKeySuffixList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['KeyPrefixList'])) {
            if (!empty($map['KeyPrefixList'])) {
                $model->keyPrefixList = [];
                $n1                   = 0;
                foreach ($map['KeyPrefixList'] as $item1) {
                    $model->keyPrefixList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['KeySuffixList'])) {
            if (!empty($map['KeySuffixList'])) {
                $model->keySuffixList = [];
                $n1                   = 0;
                foreach ($map['KeySuffixList'] as $item1) {
                    $model->keySuffixList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['LastModifiedStartTime'])) {
            $model->lastModifiedStartTime = $map['LastModifiedStartTime'];
        }

        if (isset($map['ScanMode'])) {
            $model->scanMode = $map['ScanMode'];
        }

        return $model;
    }
}
