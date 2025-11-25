<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\consumerConnectionInfoList\consumerConnectionInfoDo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\consumerConnectionInfoList\consumerConnectionInfoDo\runningDataList\consumerRunningDataDo;

class runningDataList extends Model
{
    /**
     * @var consumerRunningDataDo[]
     */
    public $consumerRunningDataDo;
    protected $_name = [
        'consumerRunningDataDo' => 'ConsumerRunningDataDo',
    ];

    public function validate()
    {
        if (\is_array($this->consumerRunningDataDo)) {
            Model::validateArray($this->consumerRunningDataDo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consumerRunningDataDo) {
            if (\is_array($this->consumerRunningDataDo)) {
                $res['ConsumerRunningDataDo'] = [];
                $n1 = 0;
                foreach ($this->consumerRunningDataDo as $item1) {
                    $res['ConsumerRunningDataDo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ConsumerRunningDataDo'])) {
            if (!empty($map['ConsumerRunningDataDo'])) {
                $model->consumerRunningDataDo = [];
                $n1 = 0;
                foreach ($map['ConsumerRunningDataDo'] as $item1) {
                    $model->consumerRunningDataDo[$n1] = consumerRunningDataDo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
