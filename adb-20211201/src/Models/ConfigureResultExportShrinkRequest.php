<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class ConfigureResultExportShrinkRequest extends Model
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
     * @var string
     */
    public $ossInfoShrink;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $slsInfoShrink;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'exportType' => 'ExportType',
        'ossInfoShrink' => 'OssInfo',
        'regionId' => 'RegionId',
        'slsInfoShrink' => 'SlsInfo',
    ];

    public function validate()
    {
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

        if (null !== $this->ossInfoShrink) {
            $res['OssInfo'] = $this->ossInfoShrink;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->slsInfoShrink) {
            $res['SlsInfo'] = $this->slsInfoShrink;
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
            $model->ossInfoShrink = $map['OssInfo'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SlsInfo'])) {
            $model->slsInfoShrink = $map['SlsInfo'];
        }

        return $model;
    }
}
