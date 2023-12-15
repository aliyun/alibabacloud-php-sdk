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
     * @example false
     *
     * @var bool
     */
    public $strict;

    /**
     * @example 853d7220-32b8-11eb-9478-19d2d885afdb
     *
     * @var string
     */
    public $userSayId;
    protected $_name = [
        'data'      => 'Data',
        'strict'    => 'Strict',
        'userSayId' => 'UserSayId',
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
        if (null !== $this->strict) {
            $res['Strict'] = $this->strict;
        }
        if (null !== $this->userSayId) {
            $res['UserSayId'] = $this->userSayId;
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
        if (isset($map['Strict'])) {
            $model->strict = $map['Strict'];
        }
        if (isset($map['UserSayId'])) {
            $model->userSayId = $map['UserSayId'];
        }

        return $model;
    }
}
