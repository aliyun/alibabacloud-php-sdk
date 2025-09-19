<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetOssScanConfigResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $allKeyPrefix;

    /**
     * @var int
     */
    public $bucketCount;

    /**
     * @var string
     */
    public $bucketName;

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
     * @var int
     */
    public $enable;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $id;

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
    public $lastUpdateTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $realTimeIncr;

    /**
     * @var int[]
     */
    public $scanDayList;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'allKeyPrefix' => 'AllKeyPrefix',
        'bucketCount' => 'BucketCount',
        'bucketName' => 'BucketName',
        'bucketNameList' => 'BucketNameList',
        'decompressMaxFileCount' => 'DecompressMaxFileCount',
        'decompressMaxLayer' => 'DecompressMaxLayer',
        'decryptionList' => 'DecryptionList',
        'enable' => 'Enable',
        'endTime' => 'EndTime',
        'id' => 'Id',
        'keyPrefixList' => 'KeyPrefixList',
        'keySuffixList' => 'KeySuffixList',
        'lastModifiedStartTime' => 'LastModifiedStartTime',
        'lastUpdateTime' => 'LastUpdateTime',
        'name' => 'Name',
        'realTimeIncr' => 'RealTimeIncr',
        'scanDayList' => 'ScanDayList',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->bucketNameList)) {
            Model::validateArray($this->bucketNameList);
        }
        if (\is_array($this->decryptionList)) {
            Model::validateArray($this->decryptionList);
        }
        if (\is_array($this->keyPrefixList)) {
            Model::validateArray($this->keyPrefixList);
        }
        if (\is_array($this->keySuffixList)) {
            Model::validateArray($this->keySuffixList);
        }
        if (\is_array($this->scanDayList)) {
            Model::validateArray($this->scanDayList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allKeyPrefix) {
            $res['AllKeyPrefix'] = $this->allKeyPrefix;
        }

        if (null !== $this->bucketCount) {
            $res['BucketCount'] = $this->bucketCount;
        }

        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }

        if (null !== $this->bucketNameList) {
            if (\is_array($this->bucketNameList)) {
                $res['BucketNameList'] = [];
                $n1 = 0;
                foreach ($this->bucketNameList as $item1) {
                    $res['BucketNameList'][$n1] = $item1;
                    ++$n1;
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
                $n1 = 0;
                foreach ($this->decryptionList as $item1) {
                    $res['DecryptionList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->keyPrefixList) {
            if (\is_array($this->keyPrefixList)) {
                $res['KeyPrefixList'] = [];
                $n1 = 0;
                foreach ($this->keyPrefixList as $item1) {
                    $res['KeyPrefixList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->keySuffixList) {
            if (\is_array($this->keySuffixList)) {
                $res['KeySuffixList'] = [];
                $n1 = 0;
                foreach ($this->keySuffixList as $item1) {
                    $res['KeySuffixList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lastModifiedStartTime) {
            $res['LastModifiedStartTime'] = $this->lastModifiedStartTime;
        }

        if (null !== $this->lastUpdateTime) {
            $res['LastUpdateTime'] = $this->lastUpdateTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->realTimeIncr) {
            $res['RealTimeIncr'] = $this->realTimeIncr;
        }

        if (null !== $this->scanDayList) {
            if (\is_array($this->scanDayList)) {
                $res['ScanDayList'] = [];
                $n1 = 0;
                foreach ($this->scanDayList as $item1) {
                    $res['ScanDayList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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

        if (isset($map['BucketCount'])) {
            $model->bucketCount = $map['BucketCount'];
        }

        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }

        if (isset($map['BucketNameList'])) {
            if (!empty($map['BucketNameList'])) {
                $model->bucketNameList = [];
                $n1 = 0;
                foreach ($map['BucketNameList'] as $item1) {
                    $model->bucketNameList[$n1] = $item1;
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['DecryptionList'] as $item1) {
                    $model->decryptionList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['KeyPrefixList'])) {
            if (!empty($map['KeyPrefixList'])) {
                $model->keyPrefixList = [];
                $n1 = 0;
                foreach ($map['KeyPrefixList'] as $item1) {
                    $model->keyPrefixList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['KeySuffixList'])) {
            if (!empty($map['KeySuffixList'])) {
                $model->keySuffixList = [];
                $n1 = 0;
                foreach ($map['KeySuffixList'] as $item1) {
                    $model->keySuffixList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['LastModifiedStartTime'])) {
            $model->lastModifiedStartTime = $map['LastModifiedStartTime'];
        }

        if (isset($map['LastUpdateTime'])) {
            $model->lastUpdateTime = $map['LastUpdateTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RealTimeIncr'])) {
            $model->realTimeIncr = $map['RealTimeIncr'];
        }

        if (isset($map['ScanDayList'])) {
            if (!empty($map['ScanDayList'])) {
                $model->scanDayList = [];
                $n1 = 0;
                foreach ($map['ScanDayList'] as $item1) {
                    $model->scanDayList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
