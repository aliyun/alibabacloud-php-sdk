<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\DescribeSaslUsersResponseBody;

use AlibabaCloud\SDK\Alikafka\V20190916\Models\DescribeSaslUsersResponseBody\saslUserList\saslUserVO;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->saslUserVO) {
            $res['SaslUserVO'] = [];
            if (null !== $this->saslUserVO && \is_array($this->saslUserVO)) {
                $n = 0;
                foreach ($this->saslUserVO as $item) {
                    $res['SaslUserVO'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return saslUserList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SaslUserVO'])) {
            if (!empty($map['SaslUserVO'])) {
                $model->saslUserVO = [];
                $n                 = 0;
                foreach ($map['SaslUserVO'] as $item) {
                    $model->saslUserVO[$n++] = null !== $item ? saslUserVO::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
