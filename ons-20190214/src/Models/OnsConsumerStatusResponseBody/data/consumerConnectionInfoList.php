<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\consumerConnectionInfoList\consumerConnectionInfoDo;

class consumerConnectionInfoList extends Model
{
    /**
     * @var consumerConnectionInfoDo[]
     */
    public $consumerConnectionInfoDo;
    protected $_name = [
        'consumerConnectionInfoDo' => 'ConsumerConnectionInfoDo',
    ];

    public function validate()
    {
        if (\is_array($this->consumerConnectionInfoDo)) {
            Model::validateArray($this->consumerConnectionInfoDo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consumerConnectionInfoDo) {
            if (\is_array($this->consumerConnectionInfoDo)) {
                $res['ConsumerConnectionInfoDo'] = [];
                $n1 = 0;
                foreach ($this->consumerConnectionInfoDo as $item1) {
                    $res['ConsumerConnectionInfoDo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ConsumerConnectionInfoDo'])) {
            if (!empty($map['ConsumerConnectionInfoDo'])) {
                $model->consumerConnectionInfoDo = [];
                $n1 = 0;
                foreach ($map['ConsumerConnectionInfoDo'] as $item1) {
                    $model->consumerConnectionInfoDo[$n1] = consumerConnectionInfoDo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
