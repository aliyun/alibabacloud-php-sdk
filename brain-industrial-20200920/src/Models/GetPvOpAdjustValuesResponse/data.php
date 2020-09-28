<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPvOpAdjustValuesResponse;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetPvOpAdjustValuesResponse\data\pvopAdjustDataInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $status;

    /**
     * @var pvopAdjustDataInfo
     */
    public $pvopAdjustDataInfo;
    protected $_name = [
        'status'             => 'Status',
        'pvopAdjustDataInfo' => 'PvopAdjustDataInfo',
    ];

    public function validate()
    {
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('pvopAdjustDataInfo', $this->pvopAdjustDataInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->pvopAdjustDataInfo) {
            $res['PvopAdjustDataInfo'] = null !== $this->pvopAdjustDataInfo ? $this->pvopAdjustDataInfo->toMap() : null;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['PvopAdjustDataInfo'])) {
            $model->pvopAdjustDataInfo = pvopAdjustDataInfo::fromMap($map['PvopAdjustDataInfo']);
        }

        return $model;
    }
}
