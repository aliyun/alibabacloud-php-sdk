<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models\DescribeIntentResponseBody;

use AlibabaCloud\SDK\Chatbot\V20171011\Models\DescribeIntentResponseBody\userSay\data;
use AlibabaCloud\Tea\Model;

class userSay extends Model
{
    /**
     * @var data[]
     */
    public $data;

    /**
     * @var string
     */
    public $userSayId;

    /**
     * @var bool
     */
    public $strict;
    protected $_name = [
        'data'      => 'Data',
        'userSayId' => 'UserSayId',
        'strict'    => 'Strict',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['Data'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userSayId) {
            $res['UserSayId'] = $this->userSayId;
        }
        if (null !== $this->strict) {
            $res['Strict'] = $this->strict;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userSay
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n           = 0;
                foreach ($map['Data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserSayId'])) {
            $model->userSayId = $map['UserSayId'];
        }
        if (isset($map['Strict'])) {
            $model->strict = $map['Strict'];
        }

        return $model;
    }
}
