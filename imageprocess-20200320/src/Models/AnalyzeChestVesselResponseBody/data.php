<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\AnalyzeChestVesselResponseBody;

use AlibabaCloud\SDK\Imageprocess\V20200320\Models\AnalyzeChestVesselResponseBody\data\aortaInfo;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\AnalyzeChestVesselResponseBody\data\pulmonaryInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
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
     * @example http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/ct_artery_aa_ph/local_test/2021-07-08/6C4713DF-F548-47DF-A456-5DA1C8334444_result_compressed.tgz?Expires=1625732732&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSR****&Signature=5UKVmLfM7GWllIcPr9a6dKz%2B5h****
     *
     * @var string
     */
    public $resultURL;
    protected $_name = [
        'aortaInfo'     => 'AortaInfo',
        'pulmonaryInfo' => 'PulmonaryInfo',
        'resultURL'     => 'ResultURL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aortaInfo) {
            $res['AortaInfo'] = null !== $this->aortaInfo ? $this->aortaInfo->toMap() : null;
        }
        if (null !== $this->pulmonaryInfo) {
            $res['PulmonaryInfo'] = null !== $this->pulmonaryInfo ? $this->pulmonaryInfo->toMap() : null;
        }
        if (null !== $this->resultURL) {
            $res['ResultURL'] = $this->resultURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
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
