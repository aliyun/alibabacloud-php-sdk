<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\DescribeAclsResponseBody;

use AlibabaCloud\SDK\Alikafka\V20190916\Models\DescribeAclsResponseBody\kafkaAclList\kafkaAclVO;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->kafkaAclVO) {
            $res['KafkaAclVO'] = [];
            if (null !== $this->kafkaAclVO && \is_array($this->kafkaAclVO)) {
                $n = 0;
                foreach ($this->kafkaAclVO as $item) {
                    $res['KafkaAclVO'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return kafkaAclList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KafkaAclVO'])) {
            if (!empty($map['KafkaAclVO'])) {
                $model->kafkaAclVO = [];
                $n                 = 0;
                foreach ($map['KafkaAclVO'] as $item) {
                    $model->kafkaAclVO[$n++] = null !== $item ? kafkaAclVO::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
