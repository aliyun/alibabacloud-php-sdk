<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\ConfigureResultExportRequest\ossInfo;
use AlibabaCloud\SDK\Adb\V20211201\Models\ConfigureResultExportRequest\slsInfo;

class ConfigureResultExportRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $exportType;

    /**
     * @var ossInfo
     */
    public $ossInfo;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var slsInfo
     */
    public $slsInfo;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'exportType' => 'ExportType',
        'ossInfo' => 'OssInfo',
        'regionId' => 'RegionId',
        'slsInfo' => 'SlsInfo',
    ];

    public function validate()
    {
        if (null !== $this->ossInfo) {
            $this->ossInfo->validate();
        }
        if (null !== $this->slsInfo) {
            $this->slsInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->exportType) {
            $res['ExportType'] = $this->exportType;
        }

        if (null !== $this->ossInfo) {
            $res['OssInfo'] = null !== $this->ossInfo ? $this->ossInfo->toArray($noStream) : $this->ossInfo;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->slsInfo) {
            $res['SlsInfo'] = null !== $this->slsInfo ? $this->slsInfo->toArray($noStream) : $this->slsInfo;
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['ExportType'])) {
            $model->exportType = $map['ExportType'];
        }

        if (isset($map['OssInfo'])) {
            $model->ossInfo = ossInfo::fromMap($map['OssInfo']);
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SlsInfo'])) {
            $model->slsInfo = slsInfo::fromMap($map['SlsInfo']);
        }

        return $model;
    }
}
