<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class CreateAgentlessScanTaskRequest extends Model
{
    /**
     * @var string
     */
    public $assetSelectionType;

    /**
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
     * @var int
     */
    public $targetType;

    /**
     * @var string[]
     */
    public $uuidList;
    protected $_name = [
        'assetSelectionType' => 'AssetSelectionType',
        'autoDeleteDays' => 'AutoDeleteDays',
        'releaseAfterScan' => 'ReleaseAfterScan',
        'scanDataDisk' => 'ScanDataDisk',
        'targetType' => 'TargetType',
        'uuidList' => 'UuidList',
    ];

    public function validate()
    {
        if (\is_array($this->uuidList)) {
            Model::validateArray($this->uuidList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetSelectionType) {
            $res['AssetSelectionType'] = $this->assetSelectionType;
        }

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
            if (\is_array($this->uuidList)) {
                $res['UuidList'] = [];
                $n1 = 0;
                foreach ($this->uuidList as $item1) {
                    $res['UuidList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AssetSelectionType'])) {
            $model->assetSelectionType = $map['AssetSelectionType'];
        }

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
                $model->uuidList = [];
                $n1 = 0;
                foreach ($map['UuidList'] as $item1) {
                    $model->uuidList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
