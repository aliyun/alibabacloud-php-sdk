<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetCustomIdentValuesResponse;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetCustomIdentValuesResponse\data\customIdentDataInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $status;

    /**
     * @var customIdentDataInfo
     */
    public $customIdentDataInfo;
    protected $_name = [
        'status'              => 'Status',
        'customIdentDataInfo' => 'CustomIdentDataInfo',
    ];

    public function validate()
    {
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('customIdentDataInfo', $this->customIdentDataInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->customIdentDataInfo) {
            $res['CustomIdentDataInfo'] = null !== $this->customIdentDataInfo ? $this->customIdentDataInfo->toMap() : null;
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
        if (isset($map['CustomIdentDataInfo'])) {
            $model->customIdentDataInfo = customIdentDataInfo::fromMap($map['CustomIdentDataInfo']);
        }

        return $model;
    }
}
