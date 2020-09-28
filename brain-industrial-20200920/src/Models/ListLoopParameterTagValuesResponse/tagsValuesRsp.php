<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListLoopParameterTagValuesResponse;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\ListLoopParameterTagValuesResponse\tagsValuesRsp\dataList;
use AlibabaCloud\Tea\Model;

class tagsValuesRsp extends Model
{
    /**
     * @var bool
     */
    public $status;

    /**
     * @var dataList
     */
    public $dataList;
    protected $_name = [
        'status'   => 'Status',
        'dataList' => 'DataList',
    ];

    public function validate()
    {
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('dataList', $this->dataList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->dataList) {
            $res['DataList'] = null !== $this->dataList ? $this->dataList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagsValuesRsp
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['DataList'])) {
            $model->dataList = dataList::fromMap($map['DataList']);
        }

        return $model;
    }
}
