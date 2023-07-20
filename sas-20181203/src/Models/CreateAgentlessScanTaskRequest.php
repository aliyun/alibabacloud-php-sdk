<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateAgentlessScanTaskRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $autoDeleteDays;

    /**
     * @var bool
     */
    public $releaseAfterScan;

    /**
     * @var bool
     */
    public $scanDataDisk;

    /**
     * @example 2
     *
     * @var int
     */
    public $targetType;

    /**
     * @var string[]
     */
    public $uuidList;
    protected $_name = [
        'autoDeleteDays'   => 'AutoDeleteDays',
        'releaseAfterScan' => 'ReleaseAfterScan',
        'scanDataDisk'     => 'ScanDataDisk',
        'targetType'       => 'TargetType',
        'uuidList'         => 'UuidList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoDeleteDays) {
            $res['AutoDeleteDays'] = $this->autoDeleteDays;
        }
        if (null !== $this->releaseAfterScan) {
            $res['ReleaseAfterScan'] = $this->releaseAfterScan;
        }
        if (null !== $this->scanDataDisk) {
            $res['ScanDataDisk'] = $this->scanDataDisk;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->uuidList) {
            $res['UuidList'] = $this->uuidList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAgentlessScanTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoDeleteDays'])) {
            $model->autoDeleteDays = $map['AutoDeleteDays'];
        }
        if (isset($map['ReleaseAfterScan'])) {
            $model->releaseAfterScan = $map['ReleaseAfterScan'];
        }
        if (isset($map['ScanDataDisk'])) {
            $model->scanDataDisk = $map['ScanDataDisk'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['UuidList'])) {
            if (!empty($map['UuidList'])) {
                $model->uuidList = $map['UuidList'];
            }
        }

        return $model;
    }
}
