<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetInstanceListResponseBody\instanceList\instanceVO\confluentConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetInstanceListResponseBody\instanceList\instanceVO\confluentConfig\ksqlList\confluentInstanceComponentResourceVO;

class ksqlList extends Model
{
    /**
     * @var confluentInstanceComponentResourceVO[]
     */
    public $confluentInstanceComponentResourceVO;
    protected $_name = [
        'confluentInstanceComponentResourceVO' => 'ConfluentInstanceComponentResourceVO',
    ];

    public function validate()
    {
        if (\is_array($this->confluentInstanceComponentResourceVO)) {
            Model::validateArray($this->confluentInstanceComponentResourceVO);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->confluentInstanceComponentResourceVO) {
            if (\is_array($this->confluentInstanceComponentResourceVO)) {
                $res['ConfluentInstanceComponentResourceVO'] = [];
                $n1 = 0;
                foreach ($this->confluentInstanceComponentResourceVO as $item1) {
                    $res['ConfluentInstanceComponentResourceVO'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ConfluentInstanceComponentResourceVO'])) {
            if (!empty($map['ConfluentInstanceComponentResourceVO'])) {
                $model->confluentInstanceComponentResourceVO = [];
                $n1 = 0;
                foreach ($map['ConfluentInstanceComponentResourceVO'] as $item1) {
                    $model->confluentInstanceComponentResourceVO[$n1] = confluentInstanceComponentResourceVO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
