<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\DescribeSaslUsersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\DescribeSaslUsersResponseBody\saslUserList\saslUserVO;

class saslUserList extends Model
{
    /**
     * @var saslUserVO[]
     */
    public $saslUserVO;
    protected $_name = [
        'saslUserVO' => 'SaslUserVO',
    ];

    public function validate()
    {
        if (\is_array($this->saslUserVO)) {
            Model::validateArray($this->saslUserVO);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->saslUserVO) {
            if (\is_array($this->saslUserVO)) {
                $res['SaslUserVO'] = [];
                $n1 = 0;
                foreach ($this->saslUserVO as $item1) {
                    $res['SaslUserVO'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SaslUserVO'])) {
            if (!empty($map['SaslUserVO'])) {
                $model->saslUserVO = [];
                $n1 = 0;
                foreach ($map['SaslUserVO'] as $item1) {
                    $model->saslUserVO[$n1++] = saslUserVO::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
