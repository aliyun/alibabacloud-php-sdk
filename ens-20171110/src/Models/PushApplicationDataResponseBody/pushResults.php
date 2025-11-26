<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\PushApplicationDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\PushApplicationDataResponseBody\pushResults\pushResult;

class pushResults extends Model
{
    /**
     * @var pushResult[]
     */
    public $pushResult;
    protected $_name = [
        'pushResult' => 'PushResult',
    ];

    public function validate()
    {
        if (\is_array($this->pushResult)) {
            Model::validateArray($this->pushResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pushResult) {
            if (\is_array($this->pushResult)) {
                $res['PushResult'] = [];
                $n1 = 0;
                foreach ($this->pushResult as $item1) {
                    $res['PushResult'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PushResult'])) {
            if (!empty($map['PushResult'])) {
                $model->pushResult = [];
                $n1 = 0;
                foreach ($map['PushResult'] as $item1) {
                    $model->pushResult[$n1] = pushResult::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
