<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\InsertAiOutboundPhoneNumsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aiccs\V20191015\Models\InsertAiOutboundPhoneNumsResponseBody\data\failInfo;

class data extends Model
{
    /**
     * @var failInfo[]
     */
    public $failInfo;

    /**
     * @var int
     */
    public $successCount;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'failInfo' => 'FailInfo',
        'successCount' => 'SuccessCount',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->failInfo)) {
            Model::validateArray($this->failInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failInfo) {
            if (\is_array($this->failInfo)) {
                $res['FailInfo'] = [];
                $n1 = 0;
                foreach ($this->failInfo as $item1) {
                    $res['FailInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['FailInfo'])) {
            if (!empty($map['FailInfo'])) {
                $model->failInfo = [];
                $n1 = 0;
                foreach ($map['FailInfo'] as $item1) {
                    $model->failInfo[$n1++] = failInfo::fromMap($item1);
                }
            }
        }

        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
