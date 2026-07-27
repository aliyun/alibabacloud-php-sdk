<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\BatchCreateKgRelationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\BatchCreateKgRelationResponseBody\createResult\successRelationList;

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
     * @var successRelationList[]
     */
    public $successRelationList;
    protected $_name = [
        'failCount' => 'FailCount',
        'successCount' => 'SuccessCount',
        'successRelationList' => 'SuccessRelationList',
    ];

    public function validate()
    {
        if (\is_array($this->successRelationList)) {
            Model::validateArray($this->successRelationList);
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

        if (null !== $this->successRelationList) {
            if (\is_array($this->successRelationList)) {
                $res['SuccessRelationList'] = [];
                $n1 = 0;
                foreach ($this->successRelationList as $item1) {
                    $res['SuccessRelationList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['SuccessRelationList'])) {
            if (!empty($map['SuccessRelationList'])) {
                $model->successRelationList = [];
                $n1 = 0;
                foreach ($map['SuccessRelationList'] as $item1) {
                    $model->successRelationList[$n1] = successRelationList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
