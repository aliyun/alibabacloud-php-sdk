<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\UpdateComputeSubQuotaRequest\subQuotaInfoList;

class UpdateComputeSubQuotaRequest extends Model
{
    /**
     * @var subQuotaInfoList[]
     */
    public $subQuotaInfoList;
    protected $_name = [
        'subQuotaInfoList' => 'subQuotaInfoList',
    ];

    public function validate()
    {
        if (\is_array($this->subQuotaInfoList)) {
            Model::validateArray($this->subQuotaInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->subQuotaInfoList) {
            if (\is_array($this->subQuotaInfoList)) {
                $res['subQuotaInfoList'] = [];
                $n1                      = 0;
                foreach ($this->subQuotaInfoList as $item1) {
                    $res['subQuotaInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['subQuotaInfoList'])) {
            if (!empty($map['subQuotaInfoList'])) {
                $model->subQuotaInfoList = [];
                $n1                      = 0;
                foreach ($map['subQuotaInfoList'] as $item1) {
                    $model->subQuotaInfoList[$n1++] = subQuotaInfoList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
