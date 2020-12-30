<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pcdn\V20170411\Models\GetTokenListResponseBody;

use AlibabaCloud\SDK\Pcdn\V20170411\Models\GetTokenListResponseBody\tokenList\token;
use AlibabaCloud\Tea\Model;

class tokenList extends Model
{
    /**
     * @var token[]
     */
    public $token;
    protected $_name = [
        'token' => 'Token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->token) {
            $res['Token'] = [];
            if (null !== $this->token && \is_array($this->token)) {
                $n = 0;
                foreach ($this->token as $item) {
                    $res['Token'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tokenList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Token'])) {
            if (!empty($map['Token'])) {
                $model->token = [];
                $n            = 0;
                foreach ($map['Token'] as $item) {
                    $model->token[$n++] = null !== $item ? token::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
