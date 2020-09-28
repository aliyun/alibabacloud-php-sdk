<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetOpPvCustomValuesResponse;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetOpPvCustomValuesResponse\data\oppvCustomDataInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $status;

    /**
     * @var oppvCustomDataInfo
     */
    public $oppvCustomDataInfo;
    protected $_name = [
        'status'             => 'Status',
        'oppvCustomDataInfo' => 'OppvCustomDataInfo',
    ];

    public function validate()
    {
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('oppvCustomDataInfo', $this->oppvCustomDataInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->oppvCustomDataInfo) {
            $res['OppvCustomDataInfo'] = null !== $this->oppvCustomDataInfo ? $this->oppvCustomDataInfo->toMap() : null;
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
        if (isset($map['OppvCustomDataInfo'])) {
            $model->oppvCustomDataInfo = oppvCustomDataInfo::fromMap($map['OppvCustomDataInfo']);
        }

        return $model;
    }
}
