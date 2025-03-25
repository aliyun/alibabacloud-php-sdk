<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateComputeSubQuotaRequest\subQuotaInfoList;
use AlibabaCloud\Tea\Model;

class UpdateComputeSubQuotaRequest extends Model
{
    /**
     * @description The list of level-2 quotas.
     *
     * @var subQuotaInfoList[]
     */
    public $subQuotaInfoList;
    protected $_name = [
        'subQuotaInfoList' => 'subQuotaInfoList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->subQuotaInfoList) {
            $res['subQuotaInfoList'] = [];
            if (null !== $this->subQuotaInfoList && \is_array($this->subQuotaInfoList)) {
                $n = 0;
                foreach ($this->subQuotaInfoList as $item) {
                    $res['subQuotaInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateComputeSubQuotaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['subQuotaInfoList'])) {
            if (!empty($map['subQuotaInfoList'])) {
                $model->subQuotaInfoList = [];
                $n = 0;
                foreach ($map['subQuotaInfoList'] as $item) {
                    $model->subQuotaInfoList[$n++] = null !== $item ? subQuotaInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
