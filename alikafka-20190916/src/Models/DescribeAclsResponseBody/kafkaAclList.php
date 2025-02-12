<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\DescribeAclsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\DescribeAclsResponseBody\kafkaAclList\kafkaAclVO;

class kafkaAclList extends Model
{
    /**
     * @var kafkaAclVO[]
     */
    public $kafkaAclVO;
    protected $_name = [
        'kafkaAclVO' => 'KafkaAclVO',
    ];

    public function validate()
    {
        if (\is_array($this->kafkaAclVO)) {
            Model::validateArray($this->kafkaAclVO);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->kafkaAclVO) {
            if (\is_array($this->kafkaAclVO)) {
                $res['KafkaAclVO'] = [];
                $n1                = 0;
                foreach ($this->kafkaAclVO as $item1) {
                    $res['KafkaAclVO'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['KafkaAclVO'])) {
            if (!empty($map['KafkaAclVO'])) {
                $model->kafkaAclVO = [];
                $n1                = 0;
                foreach ($map['KafkaAclVO'] as $item1) {
                    $model->kafkaAclVO[$n1++] = kafkaAclVO::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
