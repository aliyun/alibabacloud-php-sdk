<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models\LifecycleRule;

use AlibabaCloud\Tea\Model;

class lifecycleTransition extends Model
{
    /**
     * @var bool
     */
    public $allowSmallFile;

    /**
     * @var string
     */
    public $createdBeforeDate;

    /**
     * @var int
     */
    public $days;

    /**
     * @var bool
     */
    public $isAccessTime;

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
        'createdBeforeDate'    => 'CreatedBeforeDate',
        'days'                 => 'Days',
        'isAccessTime'         => 'IsAccessTime',
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
        if (null !== $this->createdBeforeDate) {
            $res['CreatedBeforeDate'] = $this->createdBeforeDate;
        }
        if (null !== $this->days) {
            $res['Days'] = $this->days;
        }
        if (null !== $this->isAccessTime) {
            $res['IsAccessTime'] = $this->isAccessTime;
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
     * @return lifecycleTransition
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowSmallFile'])) {
            $model->allowSmallFile = $map['AllowSmallFile'];
        }
        if (isset($map['CreatedBeforeDate'])) {
            $model->createdBeforeDate = $map['CreatedBeforeDate'];
        }
        if (isset($map['Days'])) {
            $model->days = $map['Days'];
        }
        if (isset($map['IsAccessTime'])) {
            $model->isAccessTime = $map['IsAccessTime'];
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
