<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\analyzeChestVessel\aortaInfo;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\analyzeChestVessel\pulmonaryInfo;

class analyzeChestVessel extends Model
{
    /**
     * @var aortaInfo
     */
    public $aortaInfo;

    /**
     * @var pulmonaryInfo
     */
    public $pulmonaryInfo;

    /**
     * @var string
     */
    public $resultURL;
    protected $_name = [
        'aortaInfo' => 'AortaInfo',
        'pulmonaryInfo' => 'PulmonaryInfo',
        'resultURL' => 'ResultURL',
    ];

    public function validate()
    {
        if (null !== $this->aortaInfo) {
            $this->aortaInfo->validate();
        }
        if (null !== $this->pulmonaryInfo) {
            $this->pulmonaryInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aortaInfo) {
            $res['AortaInfo'] = null !== $this->aortaInfo ? $this->aortaInfo->toArray($noStream) : $this->aortaInfo;
        }

        if (null !== $this->pulmonaryInfo) {
            $res['PulmonaryInfo'] = null !== $this->pulmonaryInfo ? $this->pulmonaryInfo->toArray($noStream) : $this->pulmonaryInfo;
        }

        if (null !== $this->resultURL) {
            $res['ResultURL'] = $this->resultURL;
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
        if (isset($map['AortaInfo'])) {
            $model->aortaInfo = aortaInfo::fromMap($map['AortaInfo']);
        }

        if (isset($map['PulmonaryInfo'])) {
            $model->pulmonaryInfo = pulmonaryInfo::fromMap($map['PulmonaryInfo']);
        }

        if (isset($map['ResultURL'])) {
            $model->resultURL = $map['ResultURL'];
        }

        return $model;
    }
}
