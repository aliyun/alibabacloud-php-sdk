<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\BatchCreateKgEntityResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\BatchCreateKgEntityResponseBody\createResult\successEntityList;

class createResult extends Model
{
    /**
     * @var int
     */
    public $failCount;

    /**
     * @var int
     */
    public $successCount;

    /**
     * @var successEntityList[]
     */
    public $successEntityList;
    protected $_name = [
        'failCount' => 'FailCount',
        'successCount' => 'SuccessCount',
        'successEntityList' => 'SuccessEntityList',
    ];

    public function validate()
    {
        if (\is_array($this->successEntityList)) {
            Model::validateArray($this->successEntityList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failCount) {
            $res['FailCount'] = $this->failCount;
        }

        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }

        if (null !== $this->successEntityList) {
            if (\is_array($this->successEntityList)) {
                $res['SuccessEntityList'] = [];
                $n1 = 0;
                foreach ($this->successEntityList as $item1) {
                    $res['SuccessEntityList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['FailCount'])) {
            $model->failCount = $map['FailCount'];
        }

        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }

        if (isset($map['SuccessEntityList'])) {
            if (!empty($map['SuccessEntityList'])) {
                $model->successEntityList = [];
                $n1 = 0;
                foreach ($map['SuccessEntityList'] as $item1) {
                    $model->successEntityList[$n1] = successEntityList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
