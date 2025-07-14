<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListIntentionsResponseBody\data\intentList;

use AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListIntentionsResponseBody\data\intentList\userSay\userSayData;
use AlibabaCloud\Tea\Model;

class userSay extends Model
{
    /**
     * @example 1234567
     *
     * @var string
     */
    public $fromId;

    /**
     * @example 17448458
     *
     * @var string
     */
    public $id;

    /**
     * @example true
     *
     * @var bool
     */
    public $strict;

    /**
     * @var userSayData[]
     */
    public $userSayData;
    protected $_name = [
        'fromId' => 'FromId',
        'id' => 'Id',
        'strict' => 'Strict',
        'userSayData' => 'UserSayData',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fromId) {
            $res['FromId'] = $this->fromId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->strict) {
            $res['Strict'] = $this->strict;
        }
        if (null !== $this->userSayData) {
            $res['UserSayData'] = [];
            if (null !== $this->userSayData && \is_array($this->userSayData)) {
                $n = 0;
                foreach ($this->userSayData as $item) {
                    $res['UserSayData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['FromId'])) {
            $model->fromId = $map['FromId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Strict'])) {
            $model->strict = $map['Strict'];
        }
        if (isset($map['UserSayData'])) {
            if (!empty($map['UserSayData'])) {
                $model->userSayData = [];
                $n = 0;
                foreach ($map['UserSayData'] as $item) {
                    $model->userSayData[$n++] = null !== $item ? userSayData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
