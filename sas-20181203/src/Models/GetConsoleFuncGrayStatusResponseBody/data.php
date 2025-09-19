<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetConsoleFuncGrayStatusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetConsoleFuncGrayStatusResponseBody\data\excludeApiList;

class data extends Model
{
    /**
     * @var excludeApiList[]
     */
    public $excludeApiList;

    /**
     * @var bool
     */
    public $hit;
    protected $_name = [
        'excludeApiList' => 'ExcludeApiList',
        'hit' => 'Hit',
    ];

    public function validate()
    {
        if (\is_array($this->excludeApiList)) {
            Model::validateArray($this->excludeApiList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->excludeApiList) {
            if (\is_array($this->excludeApiList)) {
                $res['ExcludeApiList'] = [];
                $n1 = 0;
                foreach ($this->excludeApiList as $item1) {
                    $res['ExcludeApiList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hit) {
            $res['Hit'] = $this->hit;
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
        if (isset($map['ExcludeApiList'])) {
            if (!empty($map['ExcludeApiList'])) {
                $model->excludeApiList = [];
                $n1 = 0;
                foreach ($map['ExcludeApiList'] as $item1) {
                    $model->excludeApiList[$n1] = excludeApiList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Hit'])) {
            $model->hit = $map['Hit'];
        }

        return $model;
    }
}
