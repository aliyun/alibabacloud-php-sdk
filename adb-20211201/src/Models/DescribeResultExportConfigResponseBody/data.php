<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeResultExportConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeResultExportConfigResponseBody\data\ossInfo;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeResultExportConfigResponseBody\data\slsInfo;

class data extends Model
{
    /**
     * @var string
     */
    public $exportType;

    /**
     * @var ossInfo
     */
    public $ossInfo;

    /**
     * @var slsInfo
     */
    public $slsInfo;
    protected $_name = [
        'exportType' => 'ExportType',
        'ossInfo' => 'OssInfo',
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
        if (null !== $this->exportType) {
            $res['ExportType'] = $this->exportType;
        }

        if (null !== $this->ossInfo) {
            $res['OssInfo'] = null !== $this->ossInfo ? $this->ossInfo->toArray($noStream) : $this->ossInfo;
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
        if (isset($map['ExportType'])) {
            $model->exportType = $map['ExportType'];
        }

        if (isset($map['OssInfo'])) {
            $model->ossInfo = ossInfo::fromMap($map['OssInfo']);
        }

        if (isset($map['SlsInfo'])) {
            $model->slsInfo = slsInfo::fromMap($map['SlsInfo']);
        }

        return $model;
    }
}
