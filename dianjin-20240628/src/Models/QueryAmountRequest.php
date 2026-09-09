<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Dara\Model;

class QueryAmountRequest extends Model
{
    /**
     * @var string[]
     */
    public $aliyunUidList;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $startDate;
    protected $_name = [
        'aliyunUidList' => 'aliyunUidList',
        'endDate' => 'endDate',
        'startDate' => 'startDate',
    ];

    public function validate()
    {
        if (\is_array($this->aliyunUidList)) {
            Model::validateArray($this->aliyunUidList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunUidList) {
            if (\is_array($this->aliyunUidList)) {
                $res['aliyunUidList'] = [];
                $n1 = 0;
                foreach ($this->aliyunUidList as $item1) {
                    $res['aliyunUidList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endDate) {
            $res['endDate'] = $this->endDate;
        }

        if (null !== $this->startDate) {
            $res['startDate'] = $this->startDate;
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
        if (isset($map['aliyunUidList'])) {
            if (!empty($map['aliyunUidList'])) {
                $model->aliyunUidList = [];
                $n1 = 0;
                foreach ($map['aliyunUidList'] as $item1) {
                    $model->aliyunUidList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['endDate'])) {
            $model->endDate = $map['endDate'];
        }

        if (isset($map['startDate'])) {
            $model->startDate = $map['startDate'];
        }

        return $model;
    }
}
