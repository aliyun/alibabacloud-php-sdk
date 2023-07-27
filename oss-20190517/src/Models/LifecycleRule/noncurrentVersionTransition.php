<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models\LifecycleRule;

use AlibabaCloud\Tea\Model;

class noncurrentVersionTransition extends Model
{
    /**
     * @var bool
     */
    public $allowSmallFile;

    /**
     * @var bool
     */
    public $isAccessTime;

    /**
     * @var int
     */
    public $noncurrentDays;

    /**
     * @var bool
     */
    public $returnToStdWhenVisit;

    /**
     * @var string
     */
    public $storageClass;
    protected $_name = [
        'allowSmallFile'       => 'AllowSmallFile',
        'isAccessTime'         => 'IsAccessTime',
        'noncurrentDays'       => 'NoncurrentDays',
        'returnToStdWhenVisit' => 'ReturnToStdWhenVisit',
        'storageClass'         => 'StorageClass',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowSmallFile) {
            $res['AllowSmallFile'] = $this->allowSmallFile;
        }
        if (null !== $this->isAccessTime) {
            $res['IsAccessTime'] = $this->isAccessTime;
        }
        if (null !== $this->noncurrentDays) {
            $res['NoncurrentDays'] = $this->noncurrentDays;
        }
        if (null !== $this->returnToStdWhenVisit) {
            $res['ReturnToStdWhenVisit'] = $this->returnToStdWhenVisit;
        }
        if (null !== $this->storageClass) {
            $res['StorageClass'] = $this->storageClass;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return noncurrentVersionTransition
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowSmallFile'])) {
            $model->allowSmallFile = $map['AllowSmallFile'];
        }
        if (isset($map['IsAccessTime'])) {
            $model->isAccessTime = $map['IsAccessTime'];
        }
        if (isset($map['NoncurrentDays'])) {
            $model->noncurrentDays = $map['NoncurrentDays'];
        }
        if (isset($map['ReturnToStdWhenVisit'])) {
            $model->returnToStdWhenVisit = $map['ReturnToStdWhenVisit'];
        }
        if (isset($map['StorageClass'])) {
            $model->storageClass = $map['StorageClass'];
        }

        return $model;
    }
}
