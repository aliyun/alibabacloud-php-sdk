<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\GetInstanceListResponseBody\instanceList\instanceVO;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\GetInstanceListResponseBody\instanceList\instanceVO\confluentInstanceComponents\confluentInstanceComponentVO;

class confluentInstanceComponents extends Model
{
    /**
     * @var confluentInstanceComponentVO[]
     */
    public $confluentInstanceComponentVO;
    protected $_name = [
        'confluentInstanceComponentVO' => 'ConfluentInstanceComponentVO',
    ];

    public function validate()
    {
        if (\is_array($this->confluentInstanceComponentVO)) {
            Model::validateArray($this->confluentInstanceComponentVO);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->confluentInstanceComponentVO) {
            if (\is_array($this->confluentInstanceComponentVO)) {
                $res['ConfluentInstanceComponentVO'] = [];
                $n1 = 0;
                foreach ($this->confluentInstanceComponentVO as $item1) {
                    $res['ConfluentInstanceComponentVO'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ConfluentInstanceComponentVO'])) {
            if (!empty($map['ConfluentInstanceComponentVO'])) {
                $model->confluentInstanceComponentVO = [];
                $n1 = 0;
                foreach ($map['ConfluentInstanceComponentVO'] as $item1) {
                    $model->confluentInstanceComponentVO[$n1] = confluentInstanceComponentVO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
